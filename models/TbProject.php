<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_project".
 *
 * @property int $id
 * @property string $nama_project
 * @property string|null $desk_project
 * @property string|null $desk2_project
 * @property string|null $image1
 * @property string|null $image2
 * @property string|null $image3
 * @property string|null $client_project
 * @property string|null $team_project
 * @property string|null $services_project
 * @property string|null $date_project
 * @property int|null $about_id
 */
class TbProject extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_project'], 'required'],
            [['desk_project', 'desk2_project'], 'string'],
            [['about_id'], 'integer'],
            [['nama_project', 'image1', 'image2', 'image3', 'client_project', 'team_project', 'services_project', 'date_project'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_project' => 'Nama Project',
            'desk_project' => 'Desk Project',
            'desk2_project' => 'Desk2 Project',
            'image1' => 'Image1',
            'image2' => 'Image2',
            'image3' => 'Image3',
            'client_project' => 'Client Project',
            'team_project' => 'Team Project',
            'services_project' => 'Services Project',
            'date_project' => 'Date Project',
            'about_id' => 'About ID',
        ];
    }
}
