<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pembayaran;

/**
 * PembayaranSearch represents the model behind the search form of `app\models\Pembayaran`.
 */
class PembayaranSearch extends Pembayaran
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Pembayaran', 'Total_Pembayaran', 'Id_Order'], 'integer'],
            [['Tanggal_Pembayaran', 'Status_Pembayaran'], 'safe'],
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
        $query = Pembayaran::find();

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
            'Id_Pembayaran' => $this->Id_Pembayaran,
            'Tanggal_Pembayaran' => $this->Tanggal_Pembayaran,
            'Total_Pembayaran' => $this->Total_Pembayaran,
            'Id_Order' => $this->Id_Order,
        ]);

        $query->andFilterWhere(['like', 'Status_Pembayaran', $this->Status_Pembayaran]);

        return $dataProvider;
    }
}
