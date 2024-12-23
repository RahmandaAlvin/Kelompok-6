<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penjual".
 *
 * @property int $Id_Penjual
 * @property string|null $Nama_Penjual
 * @property string|null $Alamat_Penjual
 * @property string|null $Jk_Penjual
 * @property string|null $NoHp_Penjual
 *
 * @property Laporan[] $laporans
 */
class Penjual extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penjual';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Penjual'], 'required'],
            [['Id_Penjual'], 'integer'],
            [['Nama_Penjual'], 'string', 'max' => 45],
            [['Alamat_Penjual'], 'string', 'max' => 100],
            [['Jk_Penjual'], 'string', 'max' => 10],
            [['NoHp_Penjual'], 'string', 'max' => 15],
            [['Id_Penjual'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Penjual' => 'Id Penjual',
            'Nama_Penjual' => 'Nama Penjual',
            'Alamat_Penjual' => 'Alamat Penjual',
            'Jk_Penjual' => 'Jk Penjual',
            'NoHp_Penjual' => 'No Hp Penjual',
        ];
    }

    /**
     * Gets query for [[Laporans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporans()
    {
        return $this->hasMany(Laporan::class, ['Id_Penjual' => 'Id_Penjual']);
    }
}
