<?php

class ContactForm extends CFormModel{
    public $fromName;
    public $fromEmail;
    public $message;
    public $verifyCode;

    public function rules() {
        return array(
            array('fromName, fromEmail, message', 'required'),
            array('fromEmail', 'email'),
            // verifyCode needs to be entered correctly
            array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements() OR !Yii::app()->user->isGuest),
        );
    }

    public function attributeLabels() {
        return array(
            'fromName' => 'Name',
            'fromEmail' => 'Email',
            'message' => 'Message',
            'verifyCode' => 'Code',
        );
    }
}
