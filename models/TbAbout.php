<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_about".
 *
 * @property int $id
 * @property string $foto
 * @property string $isi
 * @property string $nama
 * @property string $bagian
 * @property string $ttl
 * @property string $alamat
 * @property string $negara
 * @property string $no_hp
 * @property string $email
 * @property string|null $tahun_exper
 */
class TbAbout extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isi', 'nama', 'bagian', 'ttl', 'alamat', 'negara', 'no_hp', 'email'], 'required'],
            [['isi', 'alamat'], 'string'],
            [['nama', 'no_hp', 'email'], 'string', 'max' => 30],
            [['bagian', 'ttl', 'negara'], 'string', 'max' => 20],
            [['tahun_exper'], 'string', 'max' => 255],
            [['foto'],'file','skipOnEmpty'=>TRUE,'extensions'=>'jpg, png']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'foto' => 'Foto',
            'isi' => 'Isi',
            'nama' => 'Nama',
            'bagian' => 'Bagian',
            'ttl' => 'Ttl',
            'alamat' => 'Alamat',
            'negara' => 'Negara',
            'no_hp' => 'No Hp',
            'email' => 'Email',
            'tahun_exper' => 'Tahun Exper',
        ];
    }
}
