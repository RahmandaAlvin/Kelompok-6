<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembayaran".
 *
 * @property int $Id_Pembayaran
 * @property string $Tanggal_Pembayaran
 * @property int $Total_Pembayaran
 * @property string $Status_Pembayaran
 * @property int $Id_Order
 *
 * @property Laporan[] $laporans
 * @property Order $order
 */
class Pembayaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembayaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Pembayaran', 'Tanggal_Pembayaran', 'Total_Pembayaran', 'Status_Pembayaran', 'Id_Order'], 'required'],
            [['Id_Pembayaran', 'Total_Pembayaran', 'Id_Order'], 'integer'],
            [['Tanggal_Pembayaran'], 'safe'],
            [['Status_Pembayaran'], 'string', 'max' => 25],
            [['Id_Pembayaran'], 'unique'],
            [['Id_Order'], 'exist', 'skipOnError' => true, 'targetClass' => Order::class, 'targetAttribute' => ['Id_Order' => 'Id_Order']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Pembayaran' => 'Id Pembayaran',
            'Tanggal_Pembayaran' => 'Tanggal Pembayaran',
            'Total_Pembayaran' => 'Total Pembayaran',
            'Status_Pembayaran' => 'Status Pembayaran',
            'Id_Order' => 'Id Order',
        ];
    }

    /**
     * Gets query for [[Laporans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporans()
    {
        return $this->hasMany(Laporan::class, ['Id_Pembayaran' => 'Id_Pembayaran']);
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::class, ['Id_Order' => 'Id_Order']);
    }
}
