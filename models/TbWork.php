<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

/**
 * This is the model class for table "tb_work".
 *
 * @property int $id
 * @property string $nama_perusahaan
 * @property string|null $desk_perusahaan
 * @property string|null $image
 * @property int|null $about_id
 */
class TbWork extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_work';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_perusahaan'], 'required'],
            [['desk_perusahaan'], 'string'],
            [['about_id'], 'integer'],
            [['nama_perusahaan', 'image'], 'string', 'max' => 255],
            [['image'],'file','skipOnEmpty'=>TRUE,'extensions'=>'jpg, png']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_perusahaan' => 'Nama Perusahaan',
            'desk_perusahaan' => 'Desk Perusahaan',
            'image' => 'Image',
            'about_id' => 'About ID',
        ];
    }
}
