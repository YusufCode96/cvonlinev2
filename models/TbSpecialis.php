<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_specialis".
 *
 * @property int $id
 * @property string $nama_spes
 * @property string|null $desk_spes
 * @property string|null $icon_spes
 * @property int|null $about_id
 */
class TbSpecialis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_specialis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_spes'], 'required'],
            [['about_id'], 'integer'],
            [['nama_spes', 'desk_spes', 'icon_spes'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_spes' => 'Nama Spes',
            'desk_spes' => 'Desk Spes',
            'icon_spes' => 'Icon Spes',
            'about_id' => 'About ID',
        ];
    }
}
