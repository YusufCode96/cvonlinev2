<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_skill".
 *
 * @property int $id
 * @property string $nama_skil
 * @property string $percent
 * @property int|null $about_id
 */
class TbSkill extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_skill';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_skil', 'percent'], 'required'],
            [['about_id'], 'integer'],
            [['nama_skil'], 'string', 'max' => 30],
            [['percent'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_skil' => 'Nama Skil',
            'percent' => 'Percent',
            'about_id' => 'About ID',
        ];
    }
}
