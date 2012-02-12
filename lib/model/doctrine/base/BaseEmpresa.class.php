<?php

/**
 * BaseEmpresa
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property varchar $empresa
 * @property text $descripcion
 * @property varchar $direccion
 * @property varchar $telefono
 * @property varchar $tel_cel
 * @property varchar $email
 * @property Doctrine_Collection $Obras
 * 
 * @method varchar             getEmpresa()     Returns the current record's "empresa" value
 * @method text                getDescripcion() Returns the current record's "descripcion" value
 * @method varchar             getDireccion()   Returns the current record's "direccion" value
 * @method varchar             getTelefono()    Returns the current record's "telefono" value
 * @method varchar             getTelCel()      Returns the current record's "tel_cel" value
 * @method varchar             getEmail()       Returns the current record's "email" value
 * @method Doctrine_Collection getObras()       Returns the current record's "Obras" collection
 * @method Empresa             setEmpresa()     Sets the current record's "empresa" value
 * @method Empresa             setDescripcion() Sets the current record's "descripcion" value
 * @method Empresa             setDireccion()   Sets the current record's "direccion" value
 * @method Empresa             setTelefono()    Sets the current record's "telefono" value
 * @method Empresa             setTelCel()      Sets the current record's "tel_cel" value
 * @method Empresa             setEmail()       Sets the current record's "email" value
 * @method Empresa             setObras()       Sets the current record's "Obras" collection
 * 
 * @package    obras
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEmpresa extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('empresa');
        $this->hasColumn('empresa', 'varchar', 200, array(
             'type' => 'varchar',
             'length' => 200,
             ));
        $this->hasColumn('descripcion', 'text', null, array(
             'type' => 'text',
             ));
        $this->hasColumn('direccion', 'varchar', 200, array(
             'type' => 'varchar',
             'length' => 200,
             ));
        $this->hasColumn('telefono', 'varchar', 200, array(
             'type' => 'varchar',
             'length' => 200,
             ));
        $this->hasColumn('tel_cel', 'varchar', 200, array(
             'type' => 'varchar',
             'length' => 200,
             ));
        $this->hasColumn('email', 'varchar', 200, array(
             'type' => 'varchar',
             'length' => 200,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Obra as Obras', array(
             'local' => 'id',
             'foreign' => 'empresa_id'));
    }
}