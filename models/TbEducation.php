<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_education".
 *
 * @property int $id
 * @property string $nama_instan
 * @property string $nama_edu
 * @property string $tahun
 * @property string|null $alamat_edu
 * @property string|null $deskripsi_edu
 * @property int|null $about_id
 */
class TbEducation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_education';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_instan', 'nama_edu', 'tahun'], 'required'],
            [['about_id'], 'integer'],
            [['nama_instan', 'nama_edu'], 'string', 'max' => 30],
            [['tahun'], 'string', 'max' => 10],
            [['alamat_edu', 'deskripsi_edu'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_instan' => 'Nama Instan',
            'nama_edu' => 'Nama Edu',
            'tahun' => 'Tahun',
            'alamat_edu' => 'Alamat Edu',
            'deskripsi_edu' => 'Deskripsi Edu',
            'about_id' => 'About ID',
        ];
    }
}
