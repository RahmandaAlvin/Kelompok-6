<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengiriman".
 *
 * @property int $Id_Pengiriman
 * @property int $Id_Pemesanan
 * @property string|null $Tanggal_Pengiriman
 * @property int $Id_Supplier
 * @property string|null $Status_Pengiriman
 *
 * @property Pemesanan $pemesanan
 * @property Supplier $supplier
 */
class Pengiriman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengiriman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Pengiriman', 'Id_Pemesanan', 'Id_Supplier'], 'required'],
            [['Id_Pengiriman', 'Id_Pemesanan', 'Id_Supplier'], 'integer'],
            [['Tanggal_Pengiriman'], 'safe'],
            [['Status_Pengiriman'], 'string', 'max' => 45],
            [['Id_Pengiriman'], 'unique'],
            [['Id_Supplier'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::class, 'targetAttribute' => ['Id_Supplier' => 'Id_Supplier']],
            [['Id_Pemesanan'], 'exist', 'skipOnError' => true, 'targetClass' => Pemesanan::class, 'targetAttribute' => ['Id_Pemesanan' => 'Id_Pemesanan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Pengiriman' => 'Id Pengiriman',
            'Id_Pemesanan' => 'Id Pemesanan',
            'Tanggal_Pengiriman' => 'Tanggal Pengiriman',
            'Id_Supplier' => 'Id Supplier',
            'Status_Pengiriman' => 'Status Pengiriman',
        ];
    }

    /**
     * Gets query for [[Pemesanan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemesanan()
    {
        return $this->hasOne(Pemesanan::class, ['Id_Pemesanan' => 'Id_Pemesanan']);
    }

    /**
     * Gets query for [[Supplier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Supplier::class, ['Id_Supplier' => 'Id_Supplier']);
    }
}
