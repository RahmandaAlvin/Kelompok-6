<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Penjual;

/**
 * PenjualSearch represents the model behind the search form of `app\models\Penjual`.
 */
class PenjualSearch extends Penjual
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Penjual'], 'integer'],
            [['Nama_Penjual', 'Alamat_Penjual', 'Jk_Penjual', 'NoHp_Penjual'], 'safe'],
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
        $query = Penjual::find();

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
            'Id_Penjual' => $this->Id_Penjual,
        ]);

        $query->andFilterWhere(['like', 'Nama_Penjual', $this->Nama_Penjual])
            ->andFilterWhere(['like', 'Alamat_Penjual', $this->Alamat_Penjual])
            ->andFilterWhere(['like', 'Jk_Penjual', $this->Jk_Penjual])
            ->andFilterWhere(['like', 'NoHp_Penjual', $this->NoHp_Penjual]);

        return $dataProvider;
    }
}
