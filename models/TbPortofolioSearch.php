<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbPortofolio;

/**
 * TbPortofolioSearch represents the model behind the search form about `app\models\TbPortofolio`.
 */
class TbPortofolioSearch extends TbPortofolio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'about_id'], 'integer'],
            [['gambar_porto', 'judul_porto', 'desk_porto'], 'safe'],
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
        $query = TbPortofolio::find();

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

        $query->andFilterWhere(['like', 'gambar_porto', $this->gambar_porto])
            ->andFilterWhere(['like', 'judul_porto', $this->judul_porto])
            ->andFilterWhere(['like', 'desk_porto', $this->desk_porto]);

        return $dataProvider;
    }
}
