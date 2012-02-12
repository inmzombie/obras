<?php

/**
 * Empresa filter form base class.
 *
 * @package    obras
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEmpresaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'empresa'     => new sfWidgetFormFilterInput(),
      'descripcion' => new sfWidgetFormFilterInput(),
      'direccion'   => new sfWidgetFormFilterInput(),
      'telefono'    => new sfWidgetFormFilterInput(),
      'tel_cel'     => new sfWidgetFormFilterInput(),
      'email'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'empresa'     => new sfValidatorPass(array('required' => false)),
      'descripcion' => new sfValidatorPass(array('required' => false)),
      'direccion'   => new sfValidatorPass(array('required' => false)),
      'telefono'    => new sfValidatorPass(array('required' => false)),
      'tel_cel'     => new sfValidatorPass(array('required' => false)),
      'email'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('empresa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Empresa';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'empresa'     => 'Text',
      'descripcion' => 'Text',
      'direccion'   => 'Text',
      'telefono'    => 'Text',
      'tel_cel'     => 'Text',
      'email'       => 'Text',
    );
  }
}
