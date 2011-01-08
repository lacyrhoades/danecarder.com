<?php

/**
 * Actions class for editable content
 * 
 * @package     ioEditableContentPlugin
 * @subpackage  actions
 * @author      Ryan Weaver <ryan.weaver@iostudio.com>
 */
class BaseioEditableContentActions extends sfActions
{
  public function preExecute()
  {
    $this->pluginWebRoot = sfConfig::get('app_editable_content_assets_web_root', '/ioEditableContentPlugin');
    $this->editableClassName = $this->_getEditableContentService()
      ->getOption('editable_class_name', 'io_editable_content');

    $this->editableListClassName = $this->_getEditableContentService()
      ->getOption('editable_list_class_name', 'io_editable_content_list');
  }

  // the dynamic css file
  public function executeCss(sfWebRequest $request)
  {
    $this->_checkCredentials();
    $this->setLayout(false);
  }

  // the dynamic js file
  public function executeJs(sfWebRequest $request)
  {
    $this->_checkCredentials();
    $this->setLayout(false);
  }

  /**
   * Action that renders a particular inline edit form
   */
  public function executeForm(sfWebRequest $request)
  {
    /*
     * this is usually an ajax request, so we wrap the exception so we can,
     * in debug=true mode, report the actual error back to the user
     */
    try
    {
      $this->_checkCredentials();
      if (!$this->_setupVariables($request))
      {
        return sfView::NONE;
      }
    }
    catch (Exception $e)
    {
      if (!sfConfig::get('sf_debug'))
      {
        throw $e;
      }

      $this->renderText($e);

      return sfView::NONE;
    }
  }

  /**
   * Handles the form submit for the form
   */
  public function executeUpdate(sfWebRequest $request)
  {
    $this->_checkCredentials();
    if (!$this->_setupVariables($request))
    {
      return sfView::NONE;
    }

    $formName = $this->form->getName();
    
    $this->form->bind($request->getParameter($formName), $request->getFiles($formName));

    // response is a json with an error key
    $json = array();
    if ($this->form->isValid())
    {
      $json['error'] = false;

      $isNew = ($this->form->isNew());
      $this->form->save();

      // report back the pk so we can update the original metadata value
      if ($isNew)
      {
        // dirty way to get the primary key, and then get its value - is there a better way?
        $pkField = $this->form->getObject()->getTable()->getIdentifierColumnNames();
        $pkField = $pkField[0];
        $json['pk'] = $this->form->getObject()->get($pkField);
        
        // also need to set the pk variable for the formInner partial so the
        // hidden field "pk" in the partial is not null (which would simulate
        // another "new" form submission -- this form should "update" from now on)
        $this->pk = $this->form->getObject()->get($pkField);
      }
      
      /**
       * for new objects, allow the form to refresh the same way it would for 
       * a redirect in the case that there are fields / configuration 
       * dependent on the object's values that have changed since the form
       * was created earlier
       */
       $formClass = get_class($this->form);
       $this->form = new $formClass($this->form->getObject());
    }
    else
    {
      $json['error'] = sprintf(
        'There were %s errors when submitting the form.',
        count($this->form->getErrorSchema()->getErrors())
      );
    }

    $formPartial = $request->getParameter('form_partial', 'ioEditableContent/formFields');

    // the form body consists of both global errors and the form field partial
    $json['response'] = $this->form->renderGlobalErrors();
    $json['response'] .= $this->getPartial('formInner');
    $text = json_encode($json);

    /*
     * If there is a file upload field, then this was submitted via an
     * iframe. To handle json response, the jquery form plugin allows us
     * to return the json inside a textarea tag
     */
    if ($this->form->isMultipart())
    {
      $text = '<textarea>'.$text.'</textarea>';
    }

    $this->renderText($text);

    return sfView::NONE;
  }

  /**
   * The ajax action the re-renders the content of an area
   */
  public function executeShow(sfWebRequest $request)
  {
    $this->_checkCredentials();
    if (!$this->_setupVariables($request))
    {
      return sfView::NONE;
    }
    $service = $this->_getEditableContentService();

    // render the content of the tag
    $this->renderText($service->getContent(
      $this->object,
      $this->fields,
      $this->partial,
      $this->method
    ));

    return sfView::NONE;
  }

  /**
   * Ajax action that sorts editable content list
   */
  public function executeSort(sfWebRequest $request)
  {
    $this->_checkCredentials();
    // give me the class of the objects being sorted
    $model = $request->getParameter('model');
    $items = $request->getParameter('items');
    $this->forward404Unless($model && $items);
    
    // give me an array where object id => position
    $items = array_flip($items);

    // remove any invalid items (with a null id)
    unset($items['null']);
    
    // retrieve the objects by the ids submitted
    $objects = Doctrine_Query::create()
      ->from($model.' c')
      ->whereIn('c.id', array_keys($items))
      ->execute();
    
    // set the positions and save the objects
    foreach($objects as $obj)
    {
      $obj->position = $items[$obj->id];
      $obj->save();
    }

    $ret = array('success' => true);
    $this->renderText(json_encode($ret));
    
    return sfView::NONE;
  }
  
  public function executeDelete(sfWebRequest $request)
  {
    $this->_checkCredentials();
    $model = $request->getParameter('model');
    $pk = $request->getParameter('pk');

    $this->forward404Unless($model && $pk, 'No model or pk parameter passed');
    $object = Doctrine_Core::getTable($model)->find($pk);
    $this->forward404Unless($object, sprintf('No %s with pk %s found', $model, $pk));

    $object->delete();
    
    $ret = array('success' => true);
    $this->renderText(json_encode($ret));

    return sfView::NONE;
  }
  
  /**
   * action to take any given object and nullify a column on that object
   */
  public function executeSetColumn(sfWebRequest $request)
  {
    $this->_checkCredentials();
    $column = $request->getParameter('column');
    $id = $request->getParameter('id');
    $model = $request->getParameter('model');
    $value = $request->getParameter('value');
    
    $obj = Doctrine_Core::getTable($model)->find($id);
    
    if ($obj)
    {
      $obj->$column = $value;
      $obj->save();
    }
    
    return sfView::NONE;
  }


  /**
   * Returns the form object based on the request parameters
   *
   * @param sfWebRequest $request
   * @return sfForm
   */
  protected function _setupVariables(sfWebRequest $request)
  {
    $this->model = $request->getParameter('model');
    $this->pk = $request->getParameter('pk');

    $this->formClass = $request->getParameter('form', $this->model.'Form');
    $this->formPartial = $request->getParameter('form_partial', 'ioEditableContent/formFields');
    $this->fields = (array)$request->getParameter('fields', array());
    $this->default_values = (array)$request->getParameter('default_values', array());

    $this->partial = $request->getParameter('partial');
    $this->method = $request->getParameter('method');

    // @todo make this work with propel
    $this->forward404Unless($this->model && $this->pk);
    $this->object = Doctrine_Core::getTable($this->model)->find($this->pk);
    if (!$this->object)
    {
      $this->object = new $this->model();
      $this->object->fromArray($this->default_values);
    }

    if (!class_exists($this->formClass))
    {
      $this->renderText(sprintf('<div>Cannot find form class "%s"</div>', $this->formClass));

      return false;
    }

    $formClass = $this->formClass;
    $this->form = new $formClass($this->object);
    if ($this->fields)
    {
      $this->form->useFields($this->fields);
    }

    $this->setLayout(false);

    return true;
  }
  
  /**
   * Helper to forward 404 if the user doesn't have edit credentials
   */
  protected function _checkCredentials()
  {
    $this->forward404Unless($this->_getEditableContentService()->shouldShowEditor($this->getUser()));
  }

  /**
   * @return ioEditableContentService
   */
  protected function _getEditableContentService()
  {
    return $this->getContext()
      ->getConfiguration()
      ->getPluginConfiguration('ioEditableContentPlugin')
      ->getEditableContentService();
  }  
}