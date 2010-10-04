<?php

/**
 * paintings actions.
 *
 * @package    dane
 * @subpackage paintings
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class paintingsActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
     $this->getResponse()->setTitle('Dane Carder Fine Art Painting, Nashville TN');
     $this->forward404Unless($this->paintings = DbFinder::from('Painting')->orderBy('Order')->find());
     if ($request->getParameter('id'))
     {
     	 $this->current_id = $request->getParameter('id'); 

         $this->currentPainting = DbFinder::from('Painting')->where('Id', $request->getParameter('id'))->findOne();
     }
     else
     {   
         $this->current_id = current($this->paintings)->getId();
	     $this->currentPainting = current($this->paintings);
	 }  
	 $this->start = ($request->getParameter('start')) ? $request->getParameter('start') : 1;
  }
  
  public function executeAbstracts(sfWebRequest $request)
  {
  
  }
  
  public function executeCivilWar(sfWebRequest $request)
  {
  
  }
}
