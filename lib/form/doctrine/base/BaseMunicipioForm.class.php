<?php

/**
 * Municipio form base class.
 *
 * @method Municipio getObject() Returns the current form's model object
 *
 * @package    obras
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMunicipioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'departamento_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Departamento'), 'add_empty' => true)),
      'udt_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Udt'), 'add_empty' => true)),
      'municipio'       => new sfWidgetFormInputText(),
      'descripcion'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'departamento_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Departamento'), 'required' => false)),
      'udt_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Udt'), 'required' => false)),
      'municipio'       => new sfValidatorPass(array('required' => false)),
      'descripcion'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('municipio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Municipio';
  }

}
