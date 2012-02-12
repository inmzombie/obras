<?php

/**
 * obra module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage obra
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseObraGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%nombre_obra%% - %%titulo_tipo_de_obra%% - %%titulo_estado_obra%% - %%presupuesto_oficial%% - %%monto_contrato%% - %%fecha_inicio%% - %%fecha_fin%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Listado de Obras';
  }

  public function getEditTitle()
  {
    return 'Editar Obra';
  }

  public function getNewTitle()
  {
    return 'Nueva Obra';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array(  'Datos de obra' =>   array(    0 => 'nombre_obra',    1 => 'tipo_obra_id',    2 => 'estado_obra_id',    3 => 'detalle_obra',  ),  'Financiamiento' =>   array(    0 => 'fuentefinanc_id',    1 => 'programa_id',    2 => 'presupuesto_oficial',  ),  'Datos de contratado' =>   array(    0 => 'empresa_id',    1 => 'monto_contrato',  ),  'Datos responsable' =>   array(    0 => 'org_id',  ),  'Plazos' =>   array(    0 => 'fecha_inicio',    1 => 'fecha_fin',    2 => 'plazo_ejecucion',  ),);
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'nombre_obra',  1 => 'titulo_tipo_de_obra',  2 => 'titulo_estado_obra',  3 => 'presupuesto_oficial',  4 => 'monto_contrato',  5 => 'fecha_inicio',  6 => 'fecha_fin',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'fuentefinanc_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'programa_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'org_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'tipo_obra_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'estado_obra_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'empresa_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'unidad_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'nombre_obra' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'detalle_obra' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'cantidad' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'presupuesto_oficial' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'monto_contrato' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'fecha_inicio' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'fecha_fin' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'plazo_ejecucion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'organizacion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'creacion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'edicion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'eliminacion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'titulo_tipo_de_obra' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Tipo de obra',),
      'titulo_estado_obra' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Estado de obra',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'fuentefinanc_id' => array(),
      'programa_id' => array(),
      'org_id' => array(),
      'tipo_obra_id' => array(),
      'estado_obra_id' => array(),
      'empresa_id' => array(),
      'unidad_id' => array(),
      'nombre_obra' => array(),
      'detalle_obra' => array(),
      'cantidad' => array(),
      'presupuesto_oficial' => array(),
      'monto_contrato' => array(),
      'fecha_inicio' => array(),
      'fecha_fin' => array(),
      'plazo_ejecucion' => array(),
      'organizacion' => array(),
      'creacion' => array(),
      'edicion' => array(),
      'eliminacion' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'fuentefinanc_id' => array(),
      'programa_id' => array(),
      'org_id' => array(),
      'tipo_obra_id' => array(),
      'estado_obra_id' => array(),
      'empresa_id' => array(),
      'unidad_id' => array(),
      'nombre_obra' => array(),
      'detalle_obra' => array(),
      'cantidad' => array(),
      'presupuesto_oficial' => array(),
      'monto_contrato' => array(),
      'fecha_inicio' => array(),
      'fecha_fin' => array(),
      'plazo_ejecucion' => array(),
      'organizacion' => array(),
      'creacion' => array(),
      'edicion' => array(),
      'eliminacion' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'fuentefinanc_id' => array(),
      'programa_id' => array(),
      'org_id' => array(),
      'tipo_obra_id' => array(),
      'estado_obra_id' => array(),
      'empresa_id' => array(),
      'unidad_id' => array(),
      'nombre_obra' => array(),
      'detalle_obra' => array(),
      'cantidad' => array(),
      'presupuesto_oficial' => array(),
      'monto_contrato' => array(),
      'fecha_inicio' => array(),
      'fecha_fin' => array(),
      'plazo_ejecucion' => array(),
      'organizacion' => array(),
      'creacion' => array(),
      'edicion' => array(),
      'eliminacion' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'fuentefinanc_id' => array(),
      'programa_id' => array(),
      'org_id' => array(),
      'tipo_obra_id' => array(),
      'estado_obra_id' => array(),
      'empresa_id' => array(),
      'unidad_id' => array(),
      'nombre_obra' => array(),
      'detalle_obra' => array(),
      'cantidad' => array(),
      'presupuesto_oficial' => array(),
      'monto_contrato' => array(),
      'fecha_inicio' => array(),
      'fecha_fin' => array(),
      'plazo_ejecucion' => array(),
      'organizacion' => array(),
      'creacion' => array(),
      'edicion' => array(),
      'eliminacion' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'fuentefinanc_id' => array(),
      'programa_id' => array(),
      'org_id' => array(),
      'tipo_obra_id' => array(),
      'estado_obra_id' => array(),
      'empresa_id' => array(),
      'unidad_id' => array(),
      'nombre_obra' => array(),
      'detalle_obra' => array(),
      'cantidad' => array(),
      'presupuesto_oficial' => array(),
      'monto_contrato' => array(),
      'fecha_inicio' => array(),
      'fecha_fin' => array(),
      'plazo_ejecucion' => array(),
      'organizacion' => array(),
      'creacion' => array(),
      'edicion' => array(),
      'eliminacion' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'obraForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'obraFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
