<?php

/**
 * Departamento form base class.
 *
 * @method Departamento getObject() Returns the current form's model object
 *
 * @package    obras
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDepartamentoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'provincia_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Provincia'), 'add_empty' => true)),
      'departamento' => new sfWidgetFormInputText(),
      'descripcion'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'provincia_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Provincia'), 'required' => false)),
      'departamento' => new sfValidatorPass(array('required' => false)),
      'descripcion'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('departamento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Departamento';
  }

}
