<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembeli".
 *
 * @property int $Id_Pembeli
 * @property string|null $Nama_Pembeli
 * @property string|null $Alamat_Pembeli
 * @property string|null $Jk_Pembeli
 * @property string|null $NoHp_Pembeli
 *
 * @property Order[] $orders
 */
class Pembeli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembeli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Pembeli'], 'required'],
            [['Id_Pembeli'], 'integer'],
            [['Nama_Pembeli'], 'string', 'max' => 45],
            [['Alamat_Pembeli'], 'string', 'max' => 100],
            [['Jk_Pembeli'], 'string', 'max' => 10],
            [['NoHp_Pembeli'], 'string', 'max' => 15],
            [['Id_Pembeli'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Pembeli' => 'Id Pembeli',
            'Nama_Pembeli' => 'Nama Pembeli',
            'Alamat_Pembeli' => 'Alamat Pembeli',
            'Jk_Pembeli' => 'Jk Pembeli',
            'NoHp_Pembeli' => 'No Hp Pembeli',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::class, ['Id_Pembeli' => 'Id_Pembeli']);
    }
}
