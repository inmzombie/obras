<?php

/**
 * Obra form.
 *
 * @package    obras
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ObraForm extends BaseObraForm {

    public function configure() {
        /**
         * unset fields
         */
        unset($this['created_at'],
                $this['updated_at'],
                $this['cracion'],
                $this['eliminacion'],
                $this['edicion']
        );


        /*
         * Select Anidados
         */
//      $this->widgetSchema['provincia_id'] = new sfWidgetFormDoctrineChoice(array(
//            'model'     => 'Provincia',
//            'add_empty' => 'Elija Provincia',
//        ));
//
//        $this->widgetSchema['departamento_id'] = new sfWidgetFormDoctrineDependentSelect(array(
//            'model'     => 'Departamento',
//            'depends'   => 'Provincia',
//            'add_empty' => 'Elija Departamento',
//        ));
//
//        $this->widgetSchema['municipio_id'] = new sfWidgetFormDoctrineDependentSelect(array(
//            'model'     => 'Municipio',
//            'depends'   => 'Departamento',
//            'add_empty' => 'Elija Municipio',
//        ));
//        $this->widgetSchema->moveField('municipio_id', 'after', 'departamento_id');
//
//        $this->widgetSchema['udt_id'] = new sfWidgetFormDoctrineChoice(array(
//            'model'     => 'UDT',
//            'add_empty' => 'Elija UDT',
//        ));
//        $this->widgetSchema->moveField('udt_id', 'after', 'municipio_id');

        /**
         * Validators para los DependentSelect provincia y departamentos
         */
//        $this->validatorSchema['provincia_id'] = new sfValidatorDoctrineChoice(array(
//            'model' => 'Provincia',
//        ));
//
//        $this->validatorSchema['departamento_id'] = new sfValidatorDoctrineChoice(array(
//            'model' => 'Departamento',
//        ));

        /**
         * AutoComplete
         */
//      $this->widgetSchema['estado_obra_id']->setOption(
//         'renderer_class',
//         'sfWidgetFormDoctrineJQueryAutocompleter'
//      );
//
//      $this->widgetSchema['estado_obra_id']->setOption(
//        'renderer_options',
//        array(
//              'model' => 'EstadoDeObra',
//              'url'   => 'buscarEstadoDeObra',
//            )
//      );

        /**
         * Date Picker
         */
        $format = '%day%/%month%/%year%';
        $today = array(
            'year' => date('Y'),
            'month' => date('n'),
            'day' => date('j')
        );
        $years = range(date('Y') - 100, date('Y'));
        $this->widgetSchema['fecha_inicio'] = new sfWidgetFormJQueryDate(
                        array(
                            'culture' => 'es',
//                            'image'=>'/images/calendario.png',
                            'date_widget' => new sfWidgetFormDate(
                                    array(
                                        'format' => $format,
                                        'default' => $today,
                                        'years' => array_combine($years, $years)
                                    )
                            )
                        )
        );
        $this->widgetSchema['fecha_fin'] = new sfWidgetFormJQueryDate(
                        array(
                            'culture' => 'es',
//                            'image'=>'/images/calendario.png',
                            'date_widget' => new sfWidgetFormDate(
                                    array(
                                        'format' => $format,
                                        'default' => $today,
                                        'years' => array_combine($years, $years)
                                    )
                            )
                        )
        );
        /**
         * text area
         */
        $this->widgetSchema['detalle_obra'] = new sfWidgetFormTextarea();
        /**
         * Seteo de Labels
         */
        $this->widgetSchema['fuentefinanc_id']->setLabel('Fuente de financiamiento');
        $this->widgetSchema['org_id']->setLabel('Organismo');
        $this->widgetSchema['tipo_obra_id']->setLabel('Tipo de obra');
        /**
         * Seteo de clases
         */
        $this->widgetSchema['nombre_obra']->setAttributes(array('class'=>':required'));
        $this->widgetSchema['tipo_obra_id']->setAttribute('class', ':required');
        $this->widgetSchema['estado_obra_id']->setAttribute('class', ':required');
        $this->widgetSchema['fuentefinanc_id']->setAttribute('class', ':required');
        $this->widgetSchema['programa_id']->setAttribute('class', ':required');
        $this->widgetSchema['empresa_id']->setAttribute('class', ':required');
        $this->widgetSchema['org_id']->setAttribute('class', ':required');
        $this->widgetSchema['presupuesto_oficial']->setAttribute('class', ':float');
        $this->widgetSchema['monto_contrato']->setAttribute('class', ':float');
        /**
         * Seteo de Opciones
         */
        $this->widgetSchema['tipo_obra_id']->setOption('add_empty' ,'Agregar Tipo de Obra');
        $this->widgetSchema['fuentefinanc_id']->setOption('add_empty' ,'Agregar Fuente de Financiamiento');
        $this->widgetSchema['programa_id']->setOption('add_empty' ,'Agregar Programa');
        $this->widgetSchema['empresa_id']->setOption('add_empty' ,'Agregar Empresa');
        $this->widgetSchema['org_id']->setOption('add_empty' ,'Agregar Organismo');
        /**
         * EmbedRelation
         */
        $this->embedRelation('LineasObras');
    }

    public function addNewFields($number) {
        $new_linea_obra = new BaseForm;
        for ($i = 0; $i <= $number; $i+=1) {
            $linea_obra = new LineaObra();
            $linea_obra->Obra = $this->getObject();
            $form = new LineaObraForm($linea_obra);
            $new_linea_obra->embedForm($i, $form);
        }
        $this->embedForm('nueva_lin_obra', $new_linea_obra);
    }

    public function bind(array $taintedValues = null, array $taintedFiles = null) {

        $new_lineas_obras = new BaseForm();
        foreach ($taintedValues['nueva_lin_obra'] as $key => $new_linea_obra) {
            $linea_obra = new LineaObra();
            $linea_obra->Obra = $this->getObject();
            $form = new LineaObraForm($linea_obra);
            $new_lineas_obras->embedForm($key, $form);
        }

        $this->embedForm('nueva_lin_obra', $new_lineas_obras);

        parent::bind($taintedValues, $taintedFiles);
    }
    

}
