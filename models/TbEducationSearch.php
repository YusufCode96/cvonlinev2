<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbEducation;

/**
 * TbEducationSearch represents the model behind the search form about `app\models\TbEducation`.
 */
class TbEducationSearch extends TbEducation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'about_id'], 'integer'],
            [['nama_instan', 'nama_edu', 'tahun', 'alamat_edu', 'deskripsi_edu'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TbEducation::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'about_id' => $this->about_id,
        ]);

        $query->andFilterWhere(['like', 'nama_instan', $this->nama_instan])
            ->andFilterWhere(['like', 'nama_edu', $this->nama_edu])
            ->andFilterWhere(['like', 'tahun', $this->tahun])
            ->andFilterWhere(['like', 'alamat_edu', $this->alamat_edu])
            ->andFilterWhere(['like', 'deskripsi_edu', $this->deskripsi_edu]);

        return $dataProvider;
    }
}
