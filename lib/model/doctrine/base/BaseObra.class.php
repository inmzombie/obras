<?php

/**
 * BaseObra
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $fuentefinanc_id
 * @property integer $programa_id
 * @property integer $org_id
 * @property integer $tipo_obra_id
 * @property integer $estado_obra_id
 * @property integer $empresa_id
 * @property integer $unidad_id
 * @property varchar $nombre_obra
 * @property text $detalle_obra
 * @property float $cantidad
 * @property float $presupuesto_oficial
 * @property float $monto_contrato
 * @property date $fecha_inicio
 * @property date $fecha_fin
 * @property varchar $plazo_ejecucion
 * @property varchar $organizacion
 * @property varchar $creacion
 * @property varchar $edicion
 * @property varchar $eliminacion
 * @property FuenteFinanciamiento $FuenteFinanciamiento
 * @property Programa $Programa
 * @property Organismo $Organismo
 * @property TipoDeObra $TipoDeObra
 * @property EstadoDeObra $EstadoDeObra
 * @property Empresa $Empresa
 * @property Unidad $Unidad
 * @property Doctrine_Collection $LineasObras
 * 
 * @method integer              getFuentefinancId()       Returns the current record's "fuentefinanc_id" value
 * @method integer              getProgramaId()           Returns the current record's "programa_id" value
 * @method integer              getOrgId()                Returns the current record's "org_id" value
 * @method integer              getTipoObraId()           Returns the current record's "tipo_obra_id" value
 * @method integer              getEstadoObraId()         Returns the current record's "estado_obra_id" value
 * @method integer              getEmpresaId()            Returns the current record's "empresa_id" value
 * @method integer              getUnidadId()             Returns the current record's "unidad_id" value
 * @method varchar              getNombreObra()           Returns the current record's "nombre_obra" value
 * @method text                 getDetalleObra()          Returns the current record's "detalle_obra" value
 * @method float                getCantidad()             Returns the current record's "cantidad" value
 * @method float                getPresupuestoOficial()   Returns the current record's "presupuesto_oficial" value
 * @method float                getMontoContrato()        Returns the current record's "monto_contrato" value
 * @method date                 getFechaInicio()          Returns the current record's "fecha_inicio" value
 * @method date                 getFechaFin()             Returns the current record's "fecha_fin" value
 * @method varchar              getPlazoEjecucion()       Returns the current record's "plazo_ejecucion" value
 * @method varchar              getOrganizacion()         Returns the current record's "organizacion" value
 * @method varchar              getCreacion()             Returns the current record's "creacion" value
 * @method varchar              getEdicion()              Returns the current record's "edicion" value
 * @method varchar              getEliminacion()          Returns the current record's "eliminacion" value
 * @method FuenteFinanciamiento getFuenteFinanciamiento() Returns the current record's "FuenteFinanciamiento" value
 * @method Programa             getPrograma()             Returns the current record's "Programa" value
 * @method Organismo            getOrganismo()            Returns the current record's "Organismo" value
 * @method TipoDeObra           getTipoDeObra()           Returns the current record's "TipoDeObra" value
 * @method EstadoDeObra         getEstadoDeObra()         Returns the current record's "EstadoDeObra" value
 * @method Empresa              getEmpresa()              Returns the current record's "Empresa" value
 * @method Unidad               getUnidad()               Returns the current record's "Unidad" value
 * @method Doctrine_Collection  getLineasObras()          Returns the current record's "LineasObras" collection
 * @method Obra                 setFuentefinancId()       Sets the current record's "fuentefinanc_id" value
 * @method Obra                 setProgramaId()           Sets the current record's "programa_id" value
 * @method Obra                 setOrgId()                Sets the current record's "org_id" value
 * @method Obra                 setTipoObraId()           Sets the current record's "tipo_obra_id" value
 * @method Obra                 setEstadoObraId()         Sets the current record's "estado_obra_id" value
 * @method Obra                 setEmpresaId()            Sets the current record's "empresa_id" value
 * @method Obra                 setUnidadId()             Sets the current record's "unidad_id" value
 * @method Obra                 setNombreObra()           Sets the current record's "nombre_obra" value
 * @method Obra                 setDetalleObra()          Sets the current record's "detalle_obra" value
 * @method Obra                 setCantidad()             Sets the current record's "cantidad" value
 * @method Obra                 setPresupuestoOficial()   Sets the current record's "presupuesto_oficial" value
 * @method Obra                 setMontoContrato()        Sets the current record's "monto_contrato" value
 * @method Obra                 setFechaInicio()          Sets the current record's "fecha_inicio" value
 * @method Obra                 setFechaFin()             Sets the current record's "fecha_fin" value
 * @method Obra                 setPlazoEjecucion()       Sets the current record's "plazo_ejecucion" value
 * @method Obra                 setOrganizacion()         Sets the current record's "organizacion" value
 * @method Obra                 setCreacion()             Sets the current record's "creacion" value
 * @method Obra                 setEdicion()              Sets the current record's "edicion" value
 * @method Obra                 setEliminacion()          Sets the current record's "eliminacion" value
 * @method Obra                 setFuenteFinanciamiento() Sets the current record's "FuenteFinanciamiento" value
 * @method Obra                 setPrograma()             Sets the current record's "Programa" value
 * @method Obra                 setOrganismo()            Sets the current record's "Organismo" value
 * @method Obra                 setTipoDeObra()           Sets the current record's "TipoDeObra" value
 * @method Obra                 setEstadoDeObra()         Sets the current record's "EstadoDeObra" value
 * @method Obra                 setEmpresa()              Sets the current record's "Empresa" value
 * @method Obra                 setUnidad()               Sets the current record's "Unidad" value
 * @method Obra                 setLineasObras()          Sets the current record's "LineasObras" collection
 * 
 * @package    obras
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseObra extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('obra');
        $this->hasColumn('fuentefinanc_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('programa_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('org_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('tipo_obra_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('estado_obra_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('empresa_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('unidad_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('nombre_obra', 'varchar', 150, array(
             'type' => 'varchar',
             'length' => 150,
             ));
        $this->hasColumn('detalle_obra', 'text', null, array(
             'type' => 'text',
             ));
        $this->hasColumn('cantidad', 'float', null, array(
             'type' => 'float',
             ));
        $this->hasColumn('presupuesto_oficial', 'float', null, array(
             'type' => 'float',
             ));
        $this->hasColumn('monto_contrato', 'float', null, array(
             'type' => 'float',
             ));
        $this->hasColumn('fecha_inicio', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('fecha_fin', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('plazo_ejecucion', 'varchar', 150, array(
             'type' => 'varchar',
             'length' => 150,
             ));
        $this->hasColumn('organizacion', 'varchar', 150, array(
             'type' => 'varchar',
             'length' => 150,
             ));
        $this->hasColumn('creacion', 'varchar', 150, array(
             'type' => 'varchar',
             'length' => 150,
             ));
        $this->hasColumn('edicion', 'varchar', 150, array(
             'type' => 'varchar',
             'length' => 150,
             ));
        $this->hasColumn('eliminacion', 'varchar', 150, array(
             'type' => 'varchar',
             'length' => 150,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('FuenteFinanciamiento', array(
             'local' => 'fuentefinanc_id',
             'foreign' => 'id'));

        $this->hasOne('Programa', array(
             'local' => 'programa_id',
             'foreign' => 'id'));

        $this->hasOne('Organismo', array(
             'local' => 'org_id',
             'foreign' => 'id'));

        $this->hasOne('TipoDeObra', array(
             'local' => 'tipo_obra_id',
             'foreign' => 'id'));

        $this->hasOne('EstadoDeObra', array(
             'local' => 'estado_obra_id',
             'foreign' => 'id'));

        $this->hasOne('Empresa', array(
             'local' => 'empresa_id',
             'foreign' => 'id'));

        $this->hasOne('Unidad', array(
             'local' => 'unidad_id',
             'foreign' => 'id'));

        $this->hasMany('LineaObra as LineasObras', array(
             'local' => 'id',
             'foreign' => 'obra_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}