<?php

/**
 * BaseScamerReport
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $content
 * @property integer $user_id
 * @property integer $scamer_id
 * @property sfGuardUser $User
 * @property sfGuardUser $Scamer
 * 
 * @method integer      getId()        Returns the current record's "id" value
 * @method string       getContent()   Returns the current record's "content" value
 * @method integer      getUserId()    Returns the current record's "user_id" value
 * @method integer      getScamerId()  Returns the current record's "scamer_id" value
 * @method sfGuardUser  getUser()      Returns the current record's "User" value
 * @method sfGuardUser  getScamer()    Returns the current record's "Scamer" value
 * @method ScamerReport setId()        Sets the current record's "id" value
 * @method ScamerReport setContent()   Sets the current record's "content" value
 * @method ScamerReport setUserId()    Sets the current record's "user_id" value
 * @method ScamerReport setScamerId()  Sets the current record's "scamer_id" value
 * @method ScamerReport setUser()      Sets the current record's "User" value
 * @method ScamerReport setScamer()    Sets the current record's "Scamer" value
 * 
 * @package    levandos
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseScamerReport extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('scamer_report');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('content', 'string', 250000, array(
             'type' => 'string',
             'length' => 250000,
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('scamer_id', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('sfGuardUser as Scamer', array(
             'local' => 'scamer_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}