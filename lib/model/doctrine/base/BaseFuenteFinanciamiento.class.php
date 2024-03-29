<?php

/**
 * BaseFuenteFinanciamiento
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property varchar $oganismo
 * @property text $descripcion
 * @property Doctrine_Collection $Programas
 * @property Doctrine_Collection $Obras
 * 
 * @method varchar              getOganismo()    Returns the current record's "oganismo" value
 * @method text                 getDescripcion() Returns the current record's "descripcion" value
 * @method Doctrine_Collection  getProgramas()   Returns the current record's "Programas" collection
 * @method Doctrine_Collection  getObras()       Returns the current record's "Obras" collection
 * @method FuenteFinanciamiento setOganismo()    Sets the current record's "oganismo" value
 * @method FuenteFinanciamiento setDescripcion() Sets the current record's "descripcion" value
 * @method FuenteFinanciamiento setProgramas()   Sets the current record's "Programas" collection
 * @method FuenteFinanciamiento setObras()       Sets the current record's "Obras" collection
 * 
 * @package    obras
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFuenteFinanciamiento extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('fuente_financiamiento');
        $this->hasColumn('oganismo', 'varchar', 200, array(
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
        $this->hasMany('Programa as Programas', array(
             'local' => 'id',
             'foreign' => 'fuente_financ_id'));

        $this->hasMany('Obra as Obras', array(
             'local' => 'id',
             'foreign' => 'fuentefinanc_id'));
    }
}