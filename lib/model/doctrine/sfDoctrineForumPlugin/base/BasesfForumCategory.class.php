<?php

/**
 * BasesfForumCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $description
 * @property integer $author
 * @property integer $hits
 * @property boolean $hide
 * @property integer $position
 * @property integer $parent
 * @property integer $last_user
 * @property Doctrine_Collection $sfGuardPermission
 * @property sfGuardUser $User
 * @property sfGuardUser $Lastuser
 * @property Doctrine_Collection $TopicCategory
 * 
 * @method string              getName()              Returns the current record's "name" value
 * @method string              getDescription()       Returns the current record's "description" value
 * @method integer             getAuthor()            Returns the current record's "author" value
 * @method integer             getHits()              Returns the current record's "hits" value
 * @method boolean             getHide()              Returns the current record's "hide" value
 * @method integer             getPosition()          Returns the current record's "position" value
 * @method integer             getParent()            Returns the current record's "parent" value
 * @method integer             getLastUser()          Returns the current record's "last_user" value
 * @method Doctrine_Collection getSfGuardPermission() Returns the current record's "sfGuardPermission" collection
 * @method sfGuardUser         getUser()              Returns the current record's "User" value
 * @method sfGuardUser         getLastuser()          Returns the current record's "Lastuser" value
 * @method Doctrine_Collection getTopicCategory()     Returns the current record's "TopicCategory" collection
 * @method sfForumCategory     setName()              Sets the current record's "name" value
 * @method sfForumCategory     setDescription()       Sets the current record's "description" value
 * @method sfForumCategory     setAuthor()            Sets the current record's "author" value
 * @method sfForumCategory     setHits()              Sets the current record's "hits" value
 * @method sfForumCategory     setHide()              Sets the current record's "hide" value
 * @method sfForumCategory     setPosition()          Sets the current record's "position" value
 * @method sfForumCategory     setParent()            Sets the current record's "parent" value
 * @method sfForumCategory     setLastUser()          Sets the current record's "last_user" value
 * @method sfForumCategory     setSfGuardPermission() Sets the current record's "sfGuardPermission" collection
 * @method sfForumCategory     setUser()              Sets the current record's "User" value
 * @method sfForumCategory     setLastuser()          Sets the current record's "Lastuser" value
 * @method sfForumCategory     setTopicCategory()     Sets the current record's "TopicCategory" collection
 * 
 * @package    levandos
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasesfForumCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_forum_category');
        $this->hasColumn('name', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('author', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('hits', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('hide', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('position', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('parent', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('last_user', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('sfGuardPermission', array(
             'refClass' => 'sfForumCategoryPermissions',
             'local' => 'category_id',
             'foreign' => 'permission_id'));

        $this->hasOne('sfGuardUser as User', array(
             'local' => 'author',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('sfGuardUser as Lastuser', array(
             'local' => 'last_user',
             'foreign' => 'id'));

        $this->hasMany('sfForumTopic as TopicCategory', array(
             'local' => 'id',
             'foreign' => 'category_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}