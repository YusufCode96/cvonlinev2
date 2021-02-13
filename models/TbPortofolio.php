<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

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
            [['judul_porto'], 'required'],
            [['about_id'], 'integer'],
            [['judul_porto'], 'string', 'max' => 30],
            [['desk_porto'], 'string', 'max' => 255],
            [['gambar_porto'],'file','skipOnEmpty'=>TRUE,'extensions'=>'jpg, png']
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
