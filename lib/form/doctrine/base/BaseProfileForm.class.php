<?php

/**
 * Profile form base class.
 *
 * @method Profile getObject() Returns the current form's model object
 *
 * @package    levandos
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProfileForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                           => new sfWidgetFormInputHidden(),
      'user_id'                      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'first_name'                   => new sfWidgetFormInputText(),
      'last_name'                    => new sfWidgetFormInputText(),
      'middle_name'                  => new sfWidgetFormInputText(),
      'real_name'                    => new sfWidgetFormInputText(),
      'gender'                       => new sfWidgetFormChoice(array('choices' => array('m' => 'm', 'w' => 'w'))),
      'city'                         => new sfWidgetFormInputText(),
      'country'                      => new sfWidgetFormInputText(),
      'zip'                          => new sfWidgetFormInputText(),
      'adress'                       => new sfWidgetFormInputText(),
      'phone'                        => new sfWidgetFormInputText(),
      'birthday'                     => new sfWidgetFormDate(),
      'height'                       => new sfWidgetFormInputText(),
      'body_type'                    => new sfWidgetFormInputText(),
      'relationship'                 => new sfWidgetFormInputText(),
      'rost'                         => new sfWidgetFormInputText(),
      'ves'                          => new sfWidgetFormInputText(),
      'ethnicity'                    => new sfWidgetFormInputText(),
      'religion'                     => new sfWidgetFormInputText(),
      'marital_status'               => new sfWidgetFormInputText(),
      'children'                     => new sfWidgetFormInputText(),
      'where_children'               => new sfWidgetFormInputText(),
      'want_children'                => new sfWidgetFormInputText(),
      'im'                           => new sfWidgetFormInputText(),
      'occupation'                   => new sfWidgetFormInputText(),
      'language1'                    => new sfWidgetFormInputText(),
      'language_skill1'              => new sfWidgetFormInputText(),
      'language2'                    => new sfWidgetFormInputText(),
      'language_skill2'              => new sfWidgetFormInputText(),
      'language3'                    => new sfWidgetFormInputText(),
      'language_skill3'              => new sfWidgetFormInputText(),
      'education'                    => new sfWidgetFormInputText(),
      'income'                       => new sfWidgetFormInputText(),
      'smoker'                       => new sfWidgetFormInputText(),
      'drinker'                      => new sfWidgetFormInputText(),
      'headline'                     => new sfWidgetFormInputText(),
      'i_can_receive'                => new sfWidgetFormInputText(),
      'i_look_for_a'                 => new sfWidgetFormInputText(),
      'looking_for_age_from'         => new sfWidgetFormInputText(),
      'looking_for_age_to'           => new sfWidgetFormInputText(),
      'looking_for_a_height_from'    => new sfWidgetFormInputText(),
      'looking_for_a_height_to'      => new sfWidgetFormInputText(),
      'looking_for_a_body_type_from' => new sfWidgetFormInputText(),
      'looking_for_a_body_type_to'   => new sfWidgetFormInputText(),
      'notify_me_about_news'         => new sfWidgetFormInputCheckbox(),
      'mobile_phone'                 => new sfWidgetFormInputText(),
      'photo'                        => new sfWidgetFormInputText(),
      'hair_lenght'                  => new sfWidgetFormInputText(),
      'hair_color'                   => new sfWidgetFormInputText(),
      'eye_color'                    => new sfWidgetFormInputText(),
      'weight'                       => new sfWidgetFormInputText(),
      'looking_for'                  => new sfWidgetFormInputText(),
      'looking_for_role'             => new sfWidgetFormInputText(),
      'contact_lenses'               => new sfWidgetFormInputCheckbox(),
      'is_active'                    => new sfWidgetFormInputCheckbox(),
      'is_new_message'               => new sfWidgetFormInputCheckbox(),
      'is_new_friend'                => new sfWidgetFormInputCheckbox(),
      'is_new_request'               => new sfWidgetFormInputCheckbox(),
      'is_new_gift'                  => new sfWidgetFormInputCheckbox(),
      'is_new_hotlist'               => new sfWidgetFormInputCheckbox(),
      'is_empty'                     => new sfWidgetFormInputCheckbox(),
      'is_online'                    => new sfWidgetFormInputCheckbox(),
      'with_photo'                   => new sfWidgetFormInputCheckbox(),
      'with_video'                   => new sfWidgetFormInputCheckbox(),
      'subtype'                      => new sfWidgetFormChoice(array('choices' => array('none' => 'none', 'top100' => 'top100', 'bikini' => 'bikini'))),
      'most_active_user'             => new sfWidgetFormInputText(),
      'status_id'                    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Status'), 'add_empty' => true)),
      'homepage'                     => new sfWidgetFormInputText(),
      'phone2'                       => new sfWidgetFormInputText(),
      'icq'                          => new sfWidgetFormInputText(),
      'msn'                          => new sfWidgetFormInputText(),
      'skype'                        => new sfWidgetFormInputText(),
      'zodiac'                       => new sfWidgetFormInputText(),
      'partner_id'                   => new sfWidgetFormInputText(),
      'can_resive_gift'              => new sfWidgetFormInputCheckbox(),
      'skan'                         => new sfWidgetFormInputText(),
      'rating'                       => new sfWidgetFormInputText(),
      'packet_id'                    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Packet'), 'add_empty' => true)),
      'max_abonent'                  => new sfWidgetFormInputText(),
      'cur_abonent'                  => new sfWidgetFormInputText(),
      'sub_newsletter'               => new sfWidgetFormInputCheckbox(),
      'sub_fav'                      => new sfWidgetFormInputCheckbox(),
      'sub_interest'                 => new sfWidgetFormInputCheckbox(),
      'sub_message'                  => new sfWidgetFormInputCheckbox(),
      'cert'                         => new sfWidgetFormInputCheckbox(),
      'scamer'                       => new sfWidgetFormInputCheckbox(),
      'is_camera'                    => new sfWidgetFormInputCheckbox(),
      'is_chat'                      => new sfWidgetFormInputCheckbox(),
      'send_as_new'                  => new sfWidgetFormInputCheckbox(),
      'birthday_mark'                => new sfWidgetFormInputText(),
      'time_on_site'                 => new sfWidgetFormInputText(),
      'is_staff'                     => new sfWidgetFormInputCheckbox(),
      'is_new'                       => new sfWidgetFormInputCheckbox(),
      'timenew'                      => new sfWidgetFormInputText(),
      'ip'                           => new sfWidgetFormInputText(),
      'created_at'                   => new sfWidgetFormDateTime(),
      'updated_at'                   => new sfWidgetFormDateTime(),
      'object_version'               => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'                      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'required' => false)),
      'first_name'                   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'last_name'                    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'middle_name'                  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'real_name'                    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'gender'                       => new sfValidatorChoice(array('choices' => array(0 => 'm', 1 => 'w'), 'required' => false)),
      'city'                         => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'country'                      => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'zip'                          => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'adress'                       => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'phone'                        => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'birthday'                     => new sfValidatorDate(array('required' => false)),
      'height'                       => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'body_type'                    => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'relationship'                 => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'rost'                         => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'ves'                          => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'ethnicity'                    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'religion'                     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'marital_status'               => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'children'                     => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'where_children'               => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'want_children'                => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'im'                           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'occupation'                   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'language1'                    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'language_skill1'              => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'language2'                    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'language_skill2'              => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'language3'                    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'language_skill3'              => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'education'                    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'income'                       => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'smoker'                       => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'drinker'                      => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'headline'                     => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'i_can_receive'                => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'i_look_for_a'                 => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'looking_for_age_from'         => new sfValidatorInteger(array('required' => false)),
      'looking_for_age_to'           => new sfValidatorInteger(array('required' => false)),
      'looking_for_a_height_from'    => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'looking_for_a_height_to'      => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'looking_for_a_body_type_from' => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'looking_for_a_body_type_to'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'notify_me_about_news'         => new sfValidatorBoolean(array('required' => false)),
      'mobile_phone'                 => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'photo'                        => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'hair_lenght'                  => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'hair_color'                   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'eye_color'                    => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'weight'                       => new sfValidatorInteger(array('required' => false)),
      'looking_for'                  => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'looking_for_role'             => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'contact_lenses'               => new sfValidatorBoolean(array('required' => false)),
      'is_active'                    => new sfValidatorBoolean(array('required' => false)),
      'is_new_message'               => new sfValidatorBoolean(array('required' => false)),
      'is_new_friend'                => new sfValidatorBoolean(array('required' => false)),
      'is_new_request'               => new sfValidatorBoolean(array('required' => false)),
      'is_new_gift'                  => new sfValidatorBoolean(array('required' => false)),
      'is_new_hotlist'               => new sfValidatorBoolean(array('required' => false)),
      'is_empty'                     => new sfValidatorBoolean(array('required' => false)),
      'is_online'                    => new sfValidatorBoolean(array('required' => false)),
      'with_photo'                   => new sfValidatorBoolean(array('required' => false)),
      'with_video'                   => new sfValidatorBoolean(array('required' => false)),
      'subtype'                      => new sfValidatorChoice(array('choices' => array(0 => 'none', 1 => 'top100', 2 => 'bikini'), 'required' => false)),
      'most_active_user'             => new sfValidatorInteger(array('required' => false)),
      'status_id'                    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Status'), 'required' => false)),
      'homepage'                     => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'phone2'                       => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'icq'                          => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'msn'                          => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'skype'                        => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'zodiac'                       => new sfValidatorInteger(array('required' => false)),
      'partner_id'                   => new sfValidatorInteger(array('required' => false)),
      'can_resive_gift'              => new sfValidatorBoolean(array('required' => false)),
      'skan'                         => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'rating'                       => new sfValidatorInteger(array('required' => false)),
      'packet_id'                    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Packet'), 'required' => false)),
      'max_abonent'                  => new sfValidatorInteger(array('required' => false)),
      'cur_abonent'                  => new sfValidatorInteger(array('required' => false)),
      'sub_newsletter'               => new sfValidatorBoolean(array('required' => false)),
      'sub_fav'                      => new sfValidatorBoolean(array('required' => false)),
      'sub_interest'                 => new sfValidatorBoolean(array('required' => false)),
      'sub_message'                  => new sfValidatorBoolean(array('required' => false)),
      'cert'                         => new sfValidatorBoolean(array('required' => false)),
      'scamer'                       => new sfValidatorBoolean(array('required' => false)),
      'is_camera'                    => new sfValidatorBoolean(array('required' => false)),
      'is_chat'                      => new sfValidatorBoolean(array('required' => false)),
      'send_as_new'                  => new sfValidatorBoolean(array('required' => false)),
      'birthday_mark'                => new sfValidatorInteger(array('required' => false)),
      'time_on_site'                 => new sfValidatorInteger(array('required' => false)),
      'is_staff'                     => new sfValidatorBoolean(array('required' => false)),
      'is_new'                       => new sfValidatorBoolean(array('required' => false)),
      'timenew'                      => new sfValidatorInteger(array('required' => false)),
      'ip'                           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'created_at'                   => new sfValidatorDateTime(),
      'updated_at'                   => new sfValidatorDateTime(),
      'object_version'               => new sfValidatorString(array('max_length' => 15, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('profile[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Profile';
  }

}