<?php

namespace app\models;
use app\models\TbLogin;

class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;
    public $role;
    public $about_id;

    public static function findIdentity($id)
    {
        //mencari user login berdasarkan IDnya dan hanya dicari 1.
        $user = TbLogin::findOne($id);
        if(!empty($user)){
            return new static($user);
        }
        return null;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        //mencari user login berdasarkan accessToken dan hanya dicari 1.
        $user = TbLogin::find()->where(['accessToken'=>$token])->one();
        if(!empty($user)){
            return new static($user);
        }
        return null;
    }

    public static function findByUsername($username)
    {
       
        //mencari user login berdasarkan username dan hanya dicari 1.
        $user = TbLogin::find()->where(['username'=>$username])->one();
        if(!empty($user)){
            return new static($user);
        }
        return null;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
