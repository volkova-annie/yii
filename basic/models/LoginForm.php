<?php

namespace app\models;

use Yii;
use yii\base\model;




/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $login
 * @property string $pass
 * @property string $first_name
 * @property string $last_name
 */
class LoginForm extends \yii\db\ActiveRecord   //\yii\db\ActiveRecord
{
    private $_user = false;
    public $login;
    public $pass;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'pass'], 'required'],
            [['login', 'pass'], 'filter', 'filter' => 'trim'],
            [['login'], 'string', 'max' => 255],
            [['pass'], 'string', 'max' => 32],
            [['login'], 'string', 'min' => 3],
            [['pass'], 'validatePassword'],
        ];
    }

    public function validatePassword($attribute) {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user) {
                $this->addError($attribute, 'Неверная связка логин/пароль');
            }
        }
    }


    public function login() {
        if ($this->validate()) {
            $user = $this->getuser();
            if ($user)
                return Yii::$app->user->login($user, 3600*24*30);
            else
                return false;
        }
        else {
            return false;
        }
    }

    public function getUser() {
        if ($this->_user == false) {
            $this->_user = User::findByLoginPass($this->login, $this->pass);
        }
        return $this->_user;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'login' => 'Логин',
            'pass' => 'Пароль',
        ];
    }
}
