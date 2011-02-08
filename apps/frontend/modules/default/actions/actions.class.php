<?php

/**
 * default actions.
 *
 * @package    danecarder
 * @subpackage default
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class defaultActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    
  }

  public function executePaintings(sfWebRequest $request)
  {
    $this->paintings = Doctrine_Core::getTable('dcPainting')->fetchSorted()->execute();
    
    $this->painting = Doctrine_Core::getTable('dcPainting')->fetchSorted()->fetchOne();
    
    if ($this->getUser()->hasCredential('edit_paintings'))
    {
      $this->setTemplate('paintingsAdmin');
    }
  }

  public function executeDetails(sfWebRequest $request)
  {
    $id = $request->getParameter('id');
    $attr = $request->getParameter('attr');
    
    $object = Doctrine_Core::getTable('dcPainting')->find($id);
    
    $result = '';
    
    if ($attr == 'details')
    {
      $result .= $object->dimensions;
      $result .= "<br/>";
      $result .= $object->medium;
      $result .= "<br/>";
      $result .= $object->year;
    }
    else
    {
      $attr = 'get'.$attr;
      $result .= $object->$attr();
    }
    
    $this->renderText($result);
    
    return sfView::NONE;
  }

  public function executeBio(sfWebRequest $request)
  {
    
  }

  public function executeContact(sfWebRequest $request)
  {
    
  }

  public function executeError404(sfWebRequest $request)
  {
    
  }

}
