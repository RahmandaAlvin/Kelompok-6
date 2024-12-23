<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property int $Id_Produk
 * @property string|null $Nama_Produk
 * @property int|null $Harga_Produk
 *
 * @property Order[] $orders
 */
class Produk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Produk'], 'required'],
            [['Id_Produk', 'Harga_Produk'], 'integer'],
            [['Nama_Produk'], 'string', 'max' => 20],
            [['Id_Produk'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Produk' => 'Id Produk',
            'Nama_Produk' => 'Nama Produk',
            'Harga_Produk' => 'Harga Produk',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::class, ['Id_Produk' => 'Id_Produk']);
    }
}
