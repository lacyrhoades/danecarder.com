<?php

/**
 * Painting form base class.
 *
 * @package    dane
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BasePaintingForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'title'       => new sfWidgetFormInput(),
      'medium'      => new sfWidgetFormInput(),
      'dimensions'  => new sfWidgetFormInput(),
      'date'        => new sfWidgetFormDateTime(),
      'description' => new sfWidgetFormInput(),
      'category'    => new sfWidgetFormInput(),
      'subcategory' => new sfWidgetFormInput(),
      'thumbnail'   => new sfWidgetFormInput(),
      'image'       => new sfWidgetFormInput(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Painting', 'column' => 'id', 'required' => false)),
      'title'       => new sfValidatorString(array('max_length' => 255)),
      'medium'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'dimensions'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'date'        => new sfValidatorDateTime(array('required' => false)),
      'description' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'category'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'subcategory' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'thumbnail'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
      'updated_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Painting', 'column' => array('title')))
    );

    $this->widgetSchema->setNameFormat('painting[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Painting';
  }


}
