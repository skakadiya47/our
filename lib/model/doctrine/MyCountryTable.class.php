<?php

/**
 * MyCountryTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class MyCountryTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object MyCountryTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('MyCountry');
    }
}