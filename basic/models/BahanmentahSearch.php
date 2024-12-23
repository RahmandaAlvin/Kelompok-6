<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bahanmentah;

/**
 * BahanmentahSearch represents the model behind the search form of `app\models\Bahanmentah`.
 */
class BahanmentahSearch extends Bahanmentah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_BahanMentah'], 'integer'],
            [['Nama_BahanMentah', 'Harga_BahanMentah', 'Stok_BahanMentah'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Bahanmentah::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Id_BahanMentah' => $this->Id_BahanMentah,
        ]);

        $query->andFilterWhere(['like', 'Nama_BahanMentah', $this->Nama_BahanMentah])
            ->andFilterWhere(['like', 'Harga_BahanMentah', $this->Harga_BahanMentah])
            ->andFilterWhere(['like', 'Stok_BahanMentah', $this->Stok_BahanMentah]);

        return $dataProvider;
    }
}
