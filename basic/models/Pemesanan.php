<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pemesanan".
 *
 * @property int $Id_Pemesanan
 * @property int $Id_BahanMentah
 * @property int $Jumlah_Pemesanan
 * @property int $Id_Owner
 *
 * @property Bahanmentah $bahanMentah
 * @property Owner $owner
 * @property Pengiriman[] $pengirimen
 */
class Pemesanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Pemesanan', 'Id_BahanMentah', 'Jumlah_Pemesanan', 'Id_Owner'], 'required'],
            [['Id_Pemesanan', 'Id_BahanMentah', 'Jumlah_Pemesanan', 'Id_Owner'], 'integer'],
            [['Id_Pemesanan'], 'unique'],
            [['Id_BahanMentah'], 'exist', 'skipOnError' => true, 'targetClass' => Bahanmentah::class, 'targetAttribute' => ['Id_BahanMentah' => 'Id_BahanMentah']],
            [['Id_Owner'], 'exist', 'skipOnError' => true, 'targetClass' => Owner::class, 'targetAttribute' => ['Id_Owner' => 'Id_Owner']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Pemesanan' => 'Id Pemesanan',
            'Id_BahanMentah' => 'Id Bahan Mentah',
            'Jumlah_Pemesanan' => 'Jumlah Pemesanan',
            'Id_Owner' => 'Id Owner',
        ];
    }

    /**
     * Gets query for [[BahanMentah]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBahanMentah()
    {
        return $this->hasOne(Bahanmentah::class, ['Id_BahanMentah' => 'Id_BahanMentah']);
    }

    /**
     * Gets query for [[Owner]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOwner()
    {
        return $this->hasOne(Owner::class, ['Id_Owner' => 'Id_Owner']);
    }

    /**
     * Gets query for [[Pengirimen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengirimen()
    {
        return $this->hasMany(Pengiriman::class, ['Id_Pemesanan' => 'Id_Pemesanan']);
    }
}
