<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_portofolio".
 *
 * @property int $id
 * @property string $gambar_porto
 * @property string $judul_porto
 * @property int|null $about_id
 * @property string|null $desk_porto
 */
class TbPortofolio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_portofolio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gambar_porto', 'judul_porto'], 'required'],
            [['about_id'], 'integer'],
            [['gambar_porto', 'judul_porto'], 'string', 'max' => 30],
            [['desk_porto'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gambar_porto' => 'Gambar Porto',
            'judul_porto' => 'Judul Porto',
            'about_id' => 'About ID',
            'desk_porto' => 'Desk Porto',
        ];
    }
}
