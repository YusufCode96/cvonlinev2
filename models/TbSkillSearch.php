<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbSkill;

/**
 * TbSkillSearch represents the model behind the search form about `app\models\TbSkill`.
 */
class TbSkillSearch extends TbSkill
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'about_id'], 'integer'],
            [['nama_skil', 'percent'], 'safe'],
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
        $query = TbSkill::find();

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

        $query->andFilterWhere(['like', 'nama_skil', $this->nama_skil])
            ->andFilterWhere(['like', 'percent', $this->percent]);

        return $dataProvider;
    }
}
