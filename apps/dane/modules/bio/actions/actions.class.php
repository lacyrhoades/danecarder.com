<?php

/**
 * bio actions.
 *
 * @package    dane
 * @subpackage bio
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class bioActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->getResponse()->setTitle('About Dane Carder and his Fine Art in Nashville TN');
  }
}
