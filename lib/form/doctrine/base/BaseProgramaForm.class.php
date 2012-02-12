<?php

/**
 * Programa form base class.
 *
 * @method Programa getObject() Returns the current form's model object
 *
 * @package    obras
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProgramaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'programa'         => new sfWidgetFormInputText(),
      'descripcion'      => new sfWidgetFormInputText(),
      'fuente_financ_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FuenteFinanciamiento'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'programa'         => new sfValidatorPass(array('required' => false)),
      'descripcion'      => new sfValidatorPass(array('required' => false)),
      'fuente_financ_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FuenteFinanciamiento'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('programa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Programa';
  }

}
