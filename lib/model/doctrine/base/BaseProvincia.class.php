<?php

/**
 * BaseProvincia
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property varchar $provincia
 * @property text $descripcion
 * @property Doctrine_Collection $Departamentos
 * 
 * @method varchar             getProvincia()     Returns the current record's "provincia" value
 * @method text                getDescripcion()   Returns the current record's "descripcion" value
 * @method Doctrine_Collection getDepartamentos() Returns the current record's "Departamentos" collection
 * @method Provincia           setProvincia()     Sets the current record's "provincia" value
 * @method Provincia           setDescripcion()   Sets the current record's "descripcion" value
 * @method Provincia           setDepartamentos() Sets the current record's "Departamentos" collection
 * 
 * @package    obras
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProvincia extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('provincia');
        $this->hasColumn('provincia', 'varchar', 200, array(
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
        $this->hasMany('Departamento as Departamentos', array(
             'local' => 'id',
             'foreign' => 'provincia_id'));
    }
}