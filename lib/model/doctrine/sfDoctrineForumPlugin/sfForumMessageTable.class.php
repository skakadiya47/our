<?php

/**
 * sfForumMessageTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class sfForumMessageTable extends PluginsfForumMessageTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object sfForumMessageTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('sfForumMessage');
    }
}