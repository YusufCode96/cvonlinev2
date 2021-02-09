<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbExperience;

/**
 * TbExperienceSearch represents the model behind the search form about `app\models\TbExperience`.
 */
class TbExperienceSearch extends TbExperience
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tahun', 'about_id'], 'integer'],
            [['foto_exper', 'judul_exper', 'deskripsi_exper', 'alamat_exper'], 'safe'],
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
        $query = TbExperience::find();

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
            'tahun' => $this->tahun,
            'about_id' => $this->about_id,
        ]);

        $query->andFilterWhere(['like', 'foto_exper', $this->foto_exper])
            ->andFilterWhere(['like', 'judul_exper', $this->judul_exper])
            ->andFilterWhere(['like', 'deskripsi_exper', $this->deskripsi_exper])
            ->andFilterWhere(['like', 'alamat_exper', $this->alamat_exper]);

        return $dataProvider;
    }
}
