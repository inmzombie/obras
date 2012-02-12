<?php

/**
 * Obra filter form base class.
 *
 * @package    obras
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseObraFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fuentefinanc_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FuenteFinanciamiento'), 'add_empty' => true)),
      'programa_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Programa'), 'add_empty' => true)),
      'org_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organismo'), 'add_empty' => true)),
      'tipo_obra_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoDeObra'), 'add_empty' => true)),
      'estado_obra_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EstadoDeObra'), 'add_empty' => true)),
      'empresa_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => true)),
      'unidad_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Unidad'), 'add_empty' => true)),
      'nombre_obra'         => new sfWidgetFormFilterInput(),
      'detalle_obra'        => new sfWidgetFormFilterInput(),
      'cantidad'            => new sfWidgetFormFilterInput(),
      'presupuesto_oficial' => new sfWidgetFormFilterInput(),
      'monto_contrato'      => new sfWidgetFormFilterInput(),
      'fecha_inicio'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_fin'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'plazo_ejecucion'     => new sfWidgetFormFilterInput(),
      'organizacion'        => new sfWidgetFormFilterInput(),
      'creacion'            => new sfWidgetFormFilterInput(),
      'edicion'             => new sfWidgetFormFilterInput(),
      'eliminacion'         => new sfWidgetFormFilterInput(),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'fuentefinanc_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('FuenteFinanciamiento'), 'column' => 'id')),
      'programa_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Programa'), 'column' => 'id')),
      'org_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Organismo'), 'column' => 'id')),
      'tipo_obra_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoDeObra'), 'column' => 'id')),
      'estado_obra_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('EstadoDeObra'), 'column' => 'id')),
      'empresa_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Empresa'), 'column' => 'id')),
      'unidad_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Unidad'), 'column' => 'id')),
      'nombre_obra'         => new sfValidatorPass(array('required' => false)),
      'detalle_obra'        => new sfValidatorPass(array('required' => false)),
      'cantidad'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'presupuesto_oficial' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'monto_contrato'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fecha_inicio'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fecha_fin'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'plazo_ejecucion'     => new sfValidatorPass(array('required' => false)),
      'organizacion'        => new sfValidatorPass(array('required' => false)),
      'creacion'            => new sfValidatorPass(array('required' => false)),
      'edicion'             => new sfValidatorPass(array('required' => false)),
      'eliminacion'         => new sfValidatorPass(array('required' => false)),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('obra_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Obra';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'fuentefinanc_id'     => 'ForeignKey',
      'programa_id'         => 'ForeignKey',
      'org_id'              => 'ForeignKey',
      'tipo_obra_id'        => 'ForeignKey',
      'estado_obra_id'      => 'ForeignKey',
      'empresa_id'          => 'ForeignKey',
      'unidad_id'           => 'ForeignKey',
      'nombre_obra'         => 'Text',
      'detalle_obra'        => 'Text',
      'cantidad'            => 'Number',
      'presupuesto_oficial' => 'Number',
      'monto_contrato'      => 'Number',
      'fecha_inicio'        => 'Date',
      'fecha_fin'           => 'Date',
      'plazo_ejecucion'     => 'Text',
      'organizacion'        => 'Text',
      'creacion'            => 'Text',
      'edicion'             => 'Text',
      'eliminacion'         => 'Text',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}
