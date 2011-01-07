<?php

/**
 * dcPainting filter form base class.
 *
 * @package    danecarder
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasedcPaintingFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormFilterInput(),
      'title'      => new sfWidgetFormFilterInput(),
      'medium'     => new sfWidgetFormFilterInput(),
      'dimensions' => new sfWidgetFormFilterInput(),
      'year'       => new sfWidgetFormFilterInput(),
      'thumbnail'  => new sfWidgetFormFilterInput(),
      'image'      => new sfWidgetFormFilterInput(),
      'position'   => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'title'      => new sfValidatorPass(array('required' => false)),
      'medium'     => new sfValidatorPass(array('required' => false)),
      'dimensions' => new sfValidatorPass(array('required' => false)),
      'year'       => new sfValidatorPass(array('required' => false)),
      'thumbnail'  => new sfValidatorPass(array('required' => false)),
      'image'      => new sfValidatorPass(array('required' => false)),
      'position'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('dc_painting_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'dcPainting';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'title'      => 'Text',
      'medium'     => 'Text',
      'dimensions' => 'Text',
      'year'       => 'Text',
      'thumbnail'  => 'Text',
      'image'      => 'Text',
      'position'   => 'Number',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
