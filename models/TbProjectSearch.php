<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbProject;

/**
 * TbProjectSearch represents the model behind the search form about `app\models\TbProject`.
 */
class TbProjectSearch extends TbProject
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'about_id'], 'integer'],
            [['nama_project', 'desk_project', 'desk2_project', 'image1', 'image2', 'image3', 'client_project', 'team_project', 'services_project', 'date_project'], 'safe'],
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
        $query = TbProject::find();

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

        $query->andFilterWhere(['like', 'nama_project', $this->nama_project])
            ->andFilterWhere(['like', 'desk_project', $this->desk_project])
            ->andFilterWhere(['like', 'desk2_project', $this->desk2_project])
            ->andFilterWhere(['like', 'image1', $this->image1])
            ->andFilterWhere(['like', 'image2', $this->image2])
            ->andFilterWhere(['like', 'image3', $this->image3])
            ->andFilterWhere(['like', 'client_project', $this->client_project])
            ->andFilterWhere(['like', 'team_project', $this->team_project])
            ->andFilterWhere(['like', 'services_project', $this->services_project])
            ->andFilterWhere(['like', 'date_project', $this->date_project]);

        return $dataProvider;
    }
}
