<?php

/**
 * Obra form base class.
 *
 * @method Obra getObject() Returns the current form's model object
 *
 * @package    obras
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseObraForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'fuentefinanc_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FuenteFinanciamiento'), 'add_empty' => true)),
      'programa_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Programa'), 'add_empty' => true)),
      'org_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organismo'), 'add_empty' => true)),
      'tipo_obra_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoDeObra'), 'add_empty' => true)),
      'estado_obra_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EstadoDeObra'), 'add_empty' => true)),
      'empresa_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => true)),
      'unidad_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Unidad'), 'add_empty' => true)),
      'nombre_obra'         => new sfWidgetFormInputText(),
      'detalle_obra'        => new sfWidgetFormInputText(),
      'cantidad'            => new sfWidgetFormInputText(),
      'presupuesto_oficial' => new sfWidgetFormInputText(),
      'monto_contrato'      => new sfWidgetFormInputText(),
      'fecha_inicio'        => new sfWidgetFormDate(),
      'fecha_fin'           => new sfWidgetFormDate(),
      'plazo_ejecucion'     => new sfWidgetFormInputText(),
      'organizacion'        => new sfWidgetFormInputText(),
      'creacion'            => new sfWidgetFormInputText(),
      'edicion'             => new sfWidgetFormInputText(),
      'eliminacion'         => new sfWidgetFormInputText(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'fuentefinanc_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FuenteFinanciamiento'), 'required' => false)),
      'programa_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Programa'), 'required' => false)),
      'org_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Organismo'), 'required' => false)),
      'tipo_obra_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoDeObra'), 'required' => false)),
      'estado_obra_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('EstadoDeObra'), 'required' => false)),
      'empresa_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'required' => false)),
      'unidad_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Unidad'), 'required' => false)),
      'nombre_obra'         => new sfValidatorPass(array('required' => false)),
      'detalle_obra'        => new sfValidatorPass(array('required' => false)),
      'cantidad'            => new sfValidatorNumber(array('required' => false)),
      'presupuesto_oficial' => new sfValidatorNumber(array('required' => false)),
      'monto_contrato'      => new sfValidatorNumber(array('required' => false)),
      'fecha_inicio'        => new sfValidatorDate(array('required' => false)),
      'fecha_fin'           => new sfValidatorDate(array('required' => false)),
      'plazo_ejecucion'     => new sfValidatorPass(array('required' => false)),
      'organizacion'        => new sfValidatorPass(array('required' => false)),
      'creacion'            => new sfValidatorPass(array('required' => false)),
      'edicion'             => new sfValidatorPass(array('required' => false)),
      'eliminacion'         => new sfValidatorPass(array('required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('obra[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Obra';
  }

}
