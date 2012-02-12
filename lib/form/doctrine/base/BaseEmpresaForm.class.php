<?php

/**
 * Empresa form base class.
 *
 * @method Empresa getObject() Returns the current form's model object
 *
 * @package    obras
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEmpresaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'empresa'     => new sfWidgetFormInputText(),
      'descripcion' => new sfWidgetFormInputText(),
      'direccion'   => new sfWidgetFormInputText(),
      'telefono'    => new sfWidgetFormInputText(),
      'tel_cel'     => new sfWidgetFormInputText(),
      'email'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'empresa'     => new sfValidatorPass(array('required' => false)),
      'descripcion' => new sfValidatorPass(array('required' => false)),
      'direccion'   => new sfValidatorPass(array('required' => false)),
      'telefono'    => new sfValidatorPass(array('required' => false)),
      'tel_cel'     => new sfValidatorPass(array('required' => false)),
      'email'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('empresa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Empresa';
  }

}
