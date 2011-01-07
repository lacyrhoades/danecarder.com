<?php

/**
 * dcPainting form base class.
 *
 * @method dcPainting getObject() Returns the current form's model object
 *
 * @package    danecarder
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasedcPaintingForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputText(),
      'title'      => new sfWidgetFormInputText(),
      'medium'     => new sfWidgetFormInputText(),
      'dimensions' => new sfWidgetFormInputText(),
      'year'       => new sfWidgetFormInputText(),
      'thumbnail'  => new sfWidgetFormInputText(),
      'image'      => new sfWidgetFormInputText(),
      'position'   => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorInteger(array('required' => false)),
      'title'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'medium'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'dimensions' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'year'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'thumbnail'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'position'   => new sfValidatorInteger(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('dc_painting[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'dcPainting';
  }

}
