<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbAbout;

/**
 * TbAboutSearch represents the model behind the search form about `app\models\TbAbout`.
 */
class TbAboutSearch extends TbAbout
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['foto', 'isi', 'nama', 'bagian', 'ttl', 'alamat', 'negara', 'no_hp', 'email', 'tahun_exper'], 'safe'],
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
        $query = TbAbout::find();

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
        ]);

        $query->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'isi', $this->isi])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'bagian', $this->bagian])
            ->andFilterWhere(['like', 'ttl', $this->ttl])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'negara', $this->negara])
            ->andFilterWhere(['like', 'no_hp', $this->no_hp])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'tahun_exper', $this->tahun_exper]);

        return $dataProvider;
    }
}
