<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Painting filter form base class.
 *
 * @package    dane
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BasePaintingFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'       => new sfWidgetFormFilterInput(),
      'medium'      => new sfWidgetFormFilterInput(),
      'dimensions'  => new sfWidgetFormFilterInput(),
      'date'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'description' => new sfWidgetFormFilterInput(),
      'category'    => new sfWidgetFormFilterInput(),
      'subcategory' => new sfWidgetFormFilterInput(),
      'thumbnail'   => new sfWidgetFormFilterInput(),
      'image'       => new sfWidgetFormFilterInput(),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'title'       => new sfValidatorPass(array('required' => false)),
      'medium'      => new sfValidatorPass(array('required' => false)),
      'dimensions'  => new sfValidatorPass(array('required' => false)),
      'date'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'description' => new sfValidatorPass(array('required' => false)),
      'category'    => new sfValidatorPass(array('required' => false)),
      'subcategory' => new sfValidatorPass(array('required' => false)),
      'thumbnail'   => new sfValidatorPass(array('required' => false)),
      'image'       => new sfValidatorPass(array('required' => false)),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('painting_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Painting';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'title'       => 'Text',
      'medium'      => 'Text',
      'dimensions'  => 'Text',
      'date'        => 'Date',
      'description' => 'Text',
      'category'    => 'Text',
      'subcategory' => 'Text',
      'thumbnail'   => 'Text',
      'image'       => 'Text',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
    );
  }
}
