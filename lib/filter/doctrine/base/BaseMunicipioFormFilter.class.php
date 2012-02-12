<?php

/**
 * Municipio filter form base class.
 *
 * @package    obras
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMunicipioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'departamento_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Departamento'), 'add_empty' => true)),
      'udt_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Udt'), 'add_empty' => true)),
      'municipio'       => new sfWidgetFormFilterInput(),
      'descripcion'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'departamento_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Departamento'), 'column' => 'id')),
      'udt_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Udt'), 'column' => 'id')),
      'municipio'       => new sfValidatorPass(array('required' => false)),
      'descripcion'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('municipio_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Municipio';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'departamento_id' => 'ForeignKey',
      'udt_id'          => 'ForeignKey',
      'municipio'       => 'Text',
      'descripcion'     => 'Text',
    );
  }
}
