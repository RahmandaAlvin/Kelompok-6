<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $Id_Order
 * @property int $Jumlah_Order
 * @property int $Id_Pembeli
 * @property int $Id_Produk
 *
 * @property Pembayaran[] $pembayarans
 * @property Pembeli $pembeli
 * @property Produk $produk
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Order', 'Jumlah_Order', 'Id_Pembeli', 'Id_Produk'], 'required'],
            [['Id_Order', 'Jumlah_Order', 'Id_Pembeli', 'Id_Produk'], 'integer'],
            [['Id_Order'], 'unique'],
            [['Id_Pembeli'], 'exist', 'skipOnError' => true, 'targetClass' => Pembeli::class, 'targetAttribute' => ['Id_Pembeli' => 'Id_Pembeli']],
            [['Id_Produk'], 'exist', 'skipOnError' => true, 'targetClass' => Produk::class, 'targetAttribute' => ['Id_Produk' => 'Id_Produk']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Order' => 'Id Order',
            'Jumlah_Order' => 'Jumlah Order',
            'Id_Pembeli' => 'Id Pembeli',
            'Id_Produk' => 'Id Produk',
        ];
    }

    /**
     * Gets query for [[Pembayarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembayarans()
    {
        return $this->hasMany(Pembayaran::class, ['Id_Order' => 'Id_Order']);
    }

    /**
     * Gets query for [[Pembeli]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembeli()
    {
        return $this->hasOne(Pembeli::class, ['Id_Pembeli' => 'Id_Pembeli']);
    }

    /**
     * Gets query for [[Produk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduk()
    {
        return $this->hasOne(Produk::class, ['Id_Produk' => 'Id_Produk']);
    }
}
