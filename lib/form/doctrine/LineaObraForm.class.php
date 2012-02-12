<?php

/**
 * LineaObra form.
 *
 * @package    obras
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class LineaObraForm extends BaseLineaObraForm {

    protected static $ubicacion = array(
        'de_referencia' => 'De Referencia',
        'exacto' => 'Exacto'
    );

    public function configure() {
        unset($this['obra_id']);

        $this->widgetSchema['ubicacion'] = new sfWidgetFormChoice(array('choices' => self::$ubicacion));
        $this->validatorSchema['ubicacion'] = new sfValidatorChoice(array('choices' => array_keys(self::$ubicacion), 'required' => false));

        $this->widgetSchema['provincia_list'] = new sfWidgetFormDoctrineChoice(array(
                    'model' => 'Provincia',
                    'multiple' => false,
                    'add_empty' => true
                ));

        $this->validatorSchema['provincia_list'] = new sfValidatorDoctrineChoice(array(
                    'model' => 'Provincia', 'column' => 'id', 'multiple' => true
                ));

        $this->setDefault('provincia_list', 1);
        $this->setDefault('ubicacion', 'exacto');

        /**
         * Autocomplete Municipio
         */
        $this->widgetSchema['municipio_id']->setOption(
                'renderer_class',
                'sfWidgetFormDoctrineJQueryAutocompleter'
        );
        $this->widgetSchema['municipio_id']->setOption('renderer_options', array(
            'model' => 'Municipio',
            'url' => 'AutocompleterMunicipio',
        ));
        $this->validatorSchema['municipio_id']->setOption('required', true);

        /**
         * Seteo de Labels
         */
        $this->widgetSchema['ubicacion']->setLabel('Ubicación');
        $this->widgetSchema['municipio_id']->setLabel('Municipio');
        $this->widgetSchema['udt_id']->setLabel('UDT');
        $this->widgetSchema['descripcion']->setLabel('Descripción');

        $this->mergePostValidator(new obraValidatorSchema());
        /**
         * Seteo de Clases
         */
        $this->widgetSchema['municipio_id']->setAttributes(array('class'=>':required'));
//        $this->widgetSchema['udt_id']->setAttributes(array('class'=>':required'));
        $this->widgetSchema['costo_tramo']->setAttributes(array('class'=>':float'));
    }

}
