<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_contact".
 *
 * @property int $id
 * @property string $nama_user
 * @property string $email
 * @property string $subject
 * @property string $message
 * @property int|null $about_id
 */
class TbContact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_user', 'email', 'subject', 'message'], 'required'],
            [['message'], 'string'],
            [['about_id'], 'integer'],
            [['nama_user', 'email', 'subject'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_user' => 'Nama User',
            'email' => 'Email',
            'subject' => 'Subject',
            'message' => 'Message',
            'about_id' => 'About ID',
        ];
    }
}
