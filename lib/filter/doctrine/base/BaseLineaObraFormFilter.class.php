<?php

/**
 * LineaObra filter form base class.
 *
 * @package    obras
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseLineaObraFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'obra_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Obra'), 'add_empty' => true)),
      'ubicacion'    => new sfWidgetFormFilterInput(),
      'municipio_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'add_empty' => true)),
      'udt_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Udt'), 'add_empty' => true)),
      'descripcion'  => new sfWidgetFormFilterInput(),
      'costo_tramo'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'obra_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Obra'), 'column' => 'id')),
      'ubicacion'    => new sfValidatorPass(array('required' => false)),
      'municipio_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Municipio'), 'column' => 'id')),
      'udt_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Udt'), 'column' => 'id')),
      'descripcion'  => new sfValidatorPass(array('required' => false)),
      'costo_tramo'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('linea_obra_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'LineaObra';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'obra_id'      => 'ForeignKey',
      'ubicacion'    => 'Text',
      'municipio_id' => 'ForeignKey',
      'udt_id'       => 'ForeignKey',
      'descripcion'  => 'Text',
      'costo_tramo'  => 'Number',
    );
  }
}
