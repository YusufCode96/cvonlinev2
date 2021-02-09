<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_tools".
 *
 * @property int $id
 * @property string $nama_tool
 * @property string|null $img
 * @property int|null $about_id
 */
class TbTools extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_tools';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_tool'], 'required'],
            [['about_id'], 'integer'],
            [['nama_tool', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_tool' => 'Nama Tool',
            'img' => 'Img',
            'about_id' => 'About ID',
        ];
    }
}
