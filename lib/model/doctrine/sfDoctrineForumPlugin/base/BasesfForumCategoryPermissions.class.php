<?php

/**
 * BasesfForumCategoryPermissions
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $category_id
 * @property integer $permission_id
 * 
 * @method integer                    getCategoryId()    Returns the current record's "category_id" value
 * @method integer                    getPermissionId()  Returns the current record's "permission_id" value
 * @method sfForumCategoryPermissions setCategoryId()    Sets the current record's "category_id" value
 * @method sfForumCategoryPermissions setPermissionId()  Sets the current record's "permission_id" value
 * 
 * @package    levandos
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasesfForumCategoryPermissions extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_forum_category_permissions');
        $this->hasColumn('category_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('permission_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}