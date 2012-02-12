<?php

/**
 * BaseOrganismo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property varchar $organismo
 * @property text $descripcion
 * @property Doctrine_Collection $Obras
 * 
 * @method varchar             getOrganismo()   Returns the current record's "organismo" value
 * @method text                getDescripcion() Returns the current record's "descripcion" value
 * @method Doctrine_Collection getObras()       Returns the current record's "Obras" collection
 * @method Organismo           setOrganismo()   Sets the current record's "organismo" value
 * @method Organismo           setDescripcion() Sets the current record's "descripcion" value
 * @method Organismo           setObras()       Sets the current record's "Obras" collection
 * 
 * @package    obras
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOrganismo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('organismo');
        $this->hasColumn('organismo', 'varchar', 200, array(
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
             'foreign' => 'org_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}