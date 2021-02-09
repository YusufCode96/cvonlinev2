<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_award".
 *
 * @property int $id
 * @property string $judul
 * @property int|null $about_id
 */
class TbAward extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_award';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul'], 'required'],
            [['about_id'], 'integer'],
            [['judul'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'about_id' => 'About ID',
        ];
    }
}
