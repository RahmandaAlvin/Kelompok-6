<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "laporan".
 *
 * @property int $Id_Laporan
 * @property string|null $Tanggal_Laporan
 * @property int $Id_Penjual
 * @property int $Id_Pembayaran
 *
 * @property Pembayaran $pembayaran
 * @property Penjual $penjual
 */
class Laporan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'laporan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Laporan', 'Id_Penjual', 'Id_Pembayaran'], 'required'],
            [['Id_Laporan', 'Id_Penjual', 'Id_Pembayaran'], 'integer'],
            [['Tanggal_Laporan'], 'safe'],
            [['Id_Laporan'], 'unique'],
            [['Id_Pembayaran'], 'exist', 'skipOnError' => true, 'targetClass' => Pembayaran::class, 'targetAttribute' => ['Id_Pembayaran' => 'Id_Pembayaran']],
            [['Id_Penjual'], 'exist', 'skipOnError' => true, 'targetClass' => Penjual::class, 'targetAttribute' => ['Id_Penjual' => 'Id_Penjual']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Laporan' => 'Id Laporan',
            'Tanggal_Laporan' => 'Tanggal Laporan',
            'Id_Penjual' => 'Id Penjual',
            'Id_Pembayaran' => 'Id Pembayaran',
        ];
    }

    /**
     * Gets query for [[Pembayaran]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembayaran()
    {
        return $this->hasOne(Pembayaran::class, ['Id_Pembayaran' => 'Id_Pembayaran']);
    }

    /**
     * Gets query for [[Penjual]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenjual()
    {
        return $this->hasOne(Penjual::class, ['Id_Penjual' => 'Id_Penjual']);
    }
}
