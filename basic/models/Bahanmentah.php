<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bahanmentah".
 *
 * @property int $Id_BahanMentah
 * @property string|null $Nama_BahanMentah
 * @property string|null $Harga_BahanMentah
 * @property string|null $Stok_BahanMentah
 *
 * @property Pemesanan[] $pemesanans
 */
class Bahanmentah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bahanmentah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_BahanMentah'], 'required'],
            [['Id_BahanMentah'], 'integer'],
            [['Nama_BahanMentah', 'Stok_BahanMentah'], 'string', 'max' => 30],
            [['Harga_BahanMentah'], 'string', 'max' => 25],
            [['Id_BahanMentah'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_BahanMentah' => 'Id Bahan Mentah',
            'Nama_BahanMentah' => 'Nama Bahan Mentah',
            'Harga_BahanMentah' => 'Harga Bahan Mentah',
            'Stok_BahanMentah' => 'Stok Bahan Mentah',
        ];
    }

    /**
     * Gets query for [[Pemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemesanans()
    {
        return $this->hasMany(Pemesanan::class, ['Id_BahanMentah' => 'Id_BahanMentah']);
    }
}
