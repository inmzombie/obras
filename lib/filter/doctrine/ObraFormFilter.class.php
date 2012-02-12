<?php

/**
 * Obra filter form.
 *
 * @package    obras
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ObraFormFilter extends BaseObraFormFilter {

    public function configure() {
        unset($this['created_at'],
                $this['updated_at'],
                $this['plazo_ejecucion']
        );
        /**
         * Unset "is empty"
         */
        $this->getWidget('nombre_obra')->setOption('with_empty', false);
        $this->getWidget('detalle_obra')->setOption('with_empty', false);
        $this->getWidget('cantidad')->setOption('with_empty', false);
        $this->getWidget('presupuesto_oficial')->setOption('with_empty', false);
        $this->getWidget('monto_contrato')->setOption('with_empty', false);
        $this->getWidget('fecha_inicio')->setOption('with_empty', false);
        $this->getWidget('fecha_fin')->setOption('with_empty', false);
        /**
         * Set fechas datapicker
         */
        $format = '%day%/%month%/%year%';
        $years = range(date('Y') - 10, date('Y') + 1);
        $this->widgetSchema['fecha_inicio'] = new sfWidgetFormFilterDate(
                        array('from_date' => new sfWidgetFormJQueryDate(
                                    array(
                                        'culture' => 'es',
                                        'date_widget' => new sfWidgetFormDate(
                                                array(
                                                    'format' => $format,
                                                    'years' => array_combine($years, $years)
                                                )
                                        )
                                    )
                            ),
                            'to_date' => new sfWidgetFormJQueryDate(
                                    array(
                                        'culture' => 'es',
                                        'date_widget' => new sfWidgetFormDate(
                                                array(
                                                    'format' => $format,
                                                    'years' => array_combine($years, $years)
                                                )
                                        )
                                    )
                            ),
                            'template' => 'Desde: %from_date%<br />Hasta: %to_date%', 'with_empty' => false
                        )
        );
        $this->validatorSchema['fecha_inicio'] = new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false))));

        $format = '%day%/%month%/%year%';
        $years = range(date('Y') - 10, date('Y') + 1);
        $this->widgetSchema['fecha_fin'] = new sfWidgetFormFilterDate(
                        array('from_date' => new sfWidgetFormJQueryDate(
                                    array(
                                        'culture' => 'es',
                                        'date_widget' => new sfWidgetFormDate(
                                                array(
                                                    'format' => $format,
                                                    'years' => array_combine($years, $years)
                                                )
                                        )
                                    )
                            ),
                            'to_date' => new sfWidgetFormJQueryDate(
                                    array(
                                        'culture' => 'es',
                                        'date_widget' => new sfWidgetFormDate(
                                                array(
                                                    'format' => $format,
                                                    'years' => array_combine($years, $years)
                                                )
                                        )
                                    )
                            ),
                            'template' => 'Desde: %from_date%<br />Hasta: %to_date%', 'with_empty' => false
                        )
        );
        $this->validatorSchema['fecha_fin'] = new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false))));
        /**
         * SetLabels
         */
        $this->widgetSchema['fuentefinanc_id']->setLabel('Fuente de Financiamiento');
        $this->widgetSchema['programa_id']->setLabel('Programa');
        $this->widgetSchema['org_id']->setLabel('Organismo');
    }

}
