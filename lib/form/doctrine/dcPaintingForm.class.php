<?php

/**
 * dcPainting form.
 *
 * @package    danecarder
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class dcPaintingForm extends BasedcPaintingForm
{
  public function configure()
  {
    $image_path = sfConfig::get('sf_upload_dir');
    $thumb_path = $image_path . '/thumbnails';
    
    $this->widgetSchema['image'] = new sfWidgetFormInputFile(array());
    $this->validatorSchema['image'] = new sfValidatorFile(array('path'=>$image_path));
    
    $this->widgetSchema['thumbnail'] = new sfWidgetFormInputFile(array());
    $this->validatorSchema['thumbnail'] = new sfValidatorFile(array('path'=>$thumb_path));
  }
}
