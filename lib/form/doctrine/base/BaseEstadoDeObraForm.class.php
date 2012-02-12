<?php

/**
 * EstadoDeObra form base class.
 *
 * @method EstadoDeObra getObject() Returns the current form's model object
 *
 * @package    obras
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEstadoDeObraForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'estado_de_obra' => new sfWidgetFormInputText(),
      'descripcion'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'estado_de_obra' => new sfValidatorPass(array('required' => false)),
      'descripcion'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('estado_de_obra[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EstadoDeObra';
  }

}
