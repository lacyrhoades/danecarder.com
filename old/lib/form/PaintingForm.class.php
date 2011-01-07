<?php

/**
 * Painting form.
 *
 * @package    dane
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class PaintingForm extends BasePaintingForm
{
  public function configure()
  {
  	$this->widgetSchema['deleteImageFile'] = new sfWidgetFormInputCheckbox();  
  	$this->widgetSchema['deleteThumbnailFile'] = new sfWidgetFormInputCheckbox();  

  	$this->widgetSchema['image'] = new sfWidgetFormInputFile();
  	$this->widgetSchema['thumbnail'] = new sfWidgetFormInputFile();
  	$this->widgetSchema['date'] = new sfWidgetFormJQueryDate(array('format' => '%month%/%day%/%year%',
  
));

  	unset(
      $this['created_at'], $this['updated_at'],
      $this['expires_at'], $this['is_activated']
    );
  	$this->validatorSchema['image'] = new sfValidatorFile(array('path' => sfConfig::get('sf_upload_dir').'/', 'required' => false));
  	$this->validatorSchema['thumbnail'] = new sfValidatorFile(array('path' => sfConfig::get('sf_upload_dir').'/thumbnails/', 'required' => false));;
  
  }
  
}