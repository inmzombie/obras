<?php

/**
 * BaseEstadoDeObra
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property varchar $estado_de_obra
 * @property text $descripcion
 * @property Doctrine_Collection $Obras
 * 
 * @method varchar             getEstadoDeObra()   Returns the current record's "estado_de_obra" value
 * @method text                getDescripcion()    Returns the current record's "descripcion" value
 * @method Doctrine_Collection getObras()          Returns the current record's "Obras" collection
 * @method EstadoDeObra        setEstadoDeObra()   Sets the current record's "estado_de_obra" value
 * @method EstadoDeObra        setDescripcion()    Sets the current record's "descripcion" value
 * @method EstadoDeObra        setObras()          Sets the current record's "Obras" collection
 * 
 * @package    obras
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEstadoDeObra extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('estado_de_obra');
        $this->hasColumn('estado_de_obra', 'varchar', 200, array(
             'type' => 'varchar',
             'length' => 200,
             ));
        $this->hasColumn('descripcion', 'text', null, array(
             'type' => 'text',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Obra as Obras', array(
             'local' => 'id',
             'foreign' => 'estado_obra_id'));
    }
}