<?php

/**
 * BaseMailer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $letter_id
 * @property integer $user_id
 * @property string $email
 * @property boolean $is_sent
 * @property date $date_sent
 * @property string $title
 * @property string $content
 * @property sfGuardUser $User
 * @property Newsletter $Newsletter
 * 
 * @method integer     getLetterId()   Returns the current record's "letter_id" value
 * @method integer     getUserId()     Returns the current record's "user_id" value
 * @method string      getEmail()      Returns the current record's "email" value
 * @method boolean     getIsSent()     Returns the current record's "is_sent" value
 * @method date        getDateSent()   Returns the current record's "date_sent" value
 * @method string      getTitle()      Returns the current record's "title" value
 * @method string      getContent()    Returns the current record's "content" value
 * @method sfGuardUser getUser()       Returns the current record's "User" value
 * @method Newsletter  getNewsletter() Returns the current record's "Newsletter" value
 * @method Mailer      setLetterId()   Sets the current record's "letter_id" value
 * @method Mailer      setUserId()     Sets the current record's "user_id" value
 * @method Mailer      setEmail()      Sets the current record's "email" value
 * @method Mailer      setIsSent()     Sets the current record's "is_sent" value
 * @method Mailer      setDateSent()   Sets the current record's "date_sent" value
 * @method Mailer      setTitle()      Sets the current record's "title" value
 * @method Mailer      setContent()    Sets the current record's "content" value
 * @method Mailer      setUser()       Sets the current record's "User" value
 * @method Mailer      setNewsletter() Sets the current record's "Newsletter" value
 * 
 * @package    levandos
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMailer extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('jo_mailer');
        $this->hasColumn('letter_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('email', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             ));
        $this->hasColumn('is_sent', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('date_sent', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('title', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             ));
        $this->hasColumn('content', 'string', 25000, array(
             'type' => 'string',
             'length' => 25000,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Newsletter', array(
             'local' => 'letter_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}