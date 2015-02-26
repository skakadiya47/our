<?php

/**
 * BlacklistTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class BlacklistTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object BlacklistTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Blacklist');
    }
    
    
        public static function getCnt($guard_user)
    {
        $p = Doctrine::getTable('Blacklist')
            ->createQuery('a')
            ->where('a.user_id=?',array($guard_user->getId()))
            ->count();

        return $p;

    }
    
}