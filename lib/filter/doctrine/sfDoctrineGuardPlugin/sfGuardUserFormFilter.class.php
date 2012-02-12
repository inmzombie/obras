<?php

/**
 * sfGuardUser filter form.
 *
 * @package    obras
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardUserFormFilter extends PluginsfGuardUserFormFilter {

    public function configure() {

        /**
         * Set fechas datapicker
         */
        $format = '%day%/%month%/%year%';
        $years = range(date('Y') - 10, date('Y') + 1);
        $this->widgetSchema['created_at'] = new sfWidgetFormFilterDate(
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
        $this->validatorSchema['created_at'] = new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false))));

        $format = '%day%/%month%/%year%';
        $years = range(date('Y') - 10, date('Y') + 1);
        $this->widgetSchema['updated_at'] = new sfWidgetFormFilterDate(
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
        $this->validatorSchema['updated_at'] = new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false))));

        $format = '%day%/%month%/%year%';
        $years = range(date('Y') - 10, date('Y') + 1);
        $this->widgetSchema['last_login'] = new sfWidgetFormFilterDate(
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
        $this->validatorSchema['last_login'] = new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false))));
    }

}
