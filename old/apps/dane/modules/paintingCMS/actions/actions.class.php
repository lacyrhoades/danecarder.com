<?php

/**
 * paintingCMS actions.
 *
 * @package    dane
 * @subpackage paintingCMS
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class paintingCMSActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    //$this->painting_list = PaintingPeer::doSelect(new Criteria());
    $this->painting_list = DbFinder::from('Painting')->orderBy('Order')->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PaintingForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new PaintingForm();

    $this->processForm($request, $this->form);

    //$this->setTemplate('new');
    
    $this->redirect('paintingCMS/index');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($painting = PaintingPeer::retrieveByPk($request->getParameter('id')), sprintf('Object painting does not exist (%s).', $request->getParameter('id')));
    $this->form = new PaintingForm($painting);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($painting = PaintingPeer::retrieveByPk($request->getParameter('id')), sprintf('Object painting does not exist (%s).', $request->getParameter('id')));
    $this->form = new PaintingForm($painting);

    $this->processForm($request, $this->form);

    //$this->setTemplate('edit');
    
    $this->redirect('paintingCMS/index');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($painting = PaintingPeer::retrieveByPk($request->getParameter('id')), sprintf('Object painting does not exist (%s).', $request->getParameter('id')));
    $painting->delete();

    $this->redirect('paintingCMS/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $painting = $form->save();

      $this->redirect('paintingCMS/index');
    }
  }
}
