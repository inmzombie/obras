<?php

/**
 * EstadoDeObra filter form base class.
 *
 * @package    obras
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEstadoDeObraFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'estado_de_obra' => new sfWidgetFormFilterInput(),
      'descripcion'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'estado_de_obra' => new sfValidatorPass(array('required' => false)),
      'descripcion'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('estado_de_obra_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EstadoDeObra';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'estado_de_obra' => 'Text',
      'descripcion'    => 'Text',
    );
  }
}
