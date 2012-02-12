<?php

/**
 * Departamento filter form base class.
 *
 * @package    obras
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDepartamentoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'provincia_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Provincia'), 'add_empty' => true)),
      'departamento' => new sfWidgetFormFilterInput(),
      'descripcion'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'provincia_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Provincia'), 'column' => 'id')),
      'departamento' => new sfValidatorPass(array('required' => false)),
      'descripcion'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('departamento_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Departamento';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'provincia_id' => 'ForeignKey',
      'departamento' => 'Text',
      'descripcion'  => 'Text',
    );
  }
}
