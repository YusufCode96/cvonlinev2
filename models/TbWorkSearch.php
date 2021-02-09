<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbWork;

/**
 * TbWorkSearch represents the model behind the search form about `app\models\TbWork`.
 */
class TbWorkSearch extends TbWork
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'about_id'], 'integer'],
            [['nama_perusahaan', 'desk_perusahaan', 'image'], 'safe'],
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
        $query = TbWork::find();

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

        $query->andFilterWhere(['like', 'nama_perusahaan', $this->nama_perusahaan])
            ->andFilterWhere(['like', 'desk_perusahaan', $this->desk_perusahaan])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
