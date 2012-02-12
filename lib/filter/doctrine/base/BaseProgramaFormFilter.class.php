<?php

/**
 * Programa filter form base class.
 *
 * @package    obras
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProgramaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'programa'         => new sfWidgetFormFilterInput(),
      'descripcion'      => new sfWidgetFormFilterInput(),
      'fuente_financ_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FuenteFinanciamiento'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'programa'         => new sfValidatorPass(array('required' => false)),
      'descripcion'      => new sfValidatorPass(array('required' => false)),
      'fuente_financ_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('FuenteFinanciamiento'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('programa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Programa';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'programa'         => 'Text',
      'descripcion'      => 'Text',
      'fuente_financ_id' => 'ForeignKey',
    );
  }
}
