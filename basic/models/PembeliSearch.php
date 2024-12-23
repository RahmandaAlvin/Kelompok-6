<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pembeli;

/**
 * PembeliSearch represents the model behind the search form of `app\models\Pembeli`.
 */
class PembeliSearch extends Pembeli
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Pembeli'], 'integer'],
            [['Nama_Pembeli', 'Alamat_Pembeli', 'Jk_Pembeli', 'NoHp_Pembeli'], 'safe'],
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
        $query = Pembeli::find();

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
            'Id_Pembeli' => $this->Id_Pembeli,
        ]);

        $query->andFilterWhere(['like', 'Nama_Pembeli', $this->Nama_Pembeli])
            ->andFilterWhere(['like', 'Alamat_Pembeli', $this->Alamat_Pembeli])
            ->andFilterWhere(['like', 'Jk_Pembeli', $this->Jk_Pembeli])
            ->andFilterWhere(['like', 'NoHp_Pembeli', $this->NoHp_Pembeli]);

        return $dataProvider;
    }
}
