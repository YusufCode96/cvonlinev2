<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

/**
 * This is the model class for table "tb_experience".
 *
 * @property int $id
 * @property string $foto_exper
 * @property int $tahun
 * @property string $judul_exper
 * @property string|null $deskripsi_exper
 * @property int|null $about_id
 * @property string|null $alamat_exper
 */
class TbExperience extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_experience';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'tahun', 'judul_exper'], 'required'],
            [['tahun', 'about_id'], 'integer'],
            [['judul_exper'], 'string', 'max' => 30],
            [['deskripsi_exper', 'alamat_exper'], 'string', 'max' => 255],
            [['foto_exper'],'file','skipOnEmpty'=>TRUE,'extensions'=>'jpg, png']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'foto_exper' => 'Foto Exper',
            'tahun' => 'Tahun',
            'judul_exper' => 'Judul Exper',
            'deskripsi_exper' => 'Deskripsi Exper',
            'about_id' => 'About ID',
            'alamat_exper' => 'Alamat Exper',
        ];
    }
}
