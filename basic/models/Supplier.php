<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property int $Id_Supplier
 * @property string|null $Nama_Supplier
 * @property string|null $Alamat_Supplier
 * @property string|null $Jk_Supplier
 * @property string|null $NoHp_Supplier
 *
 * @property Pengiriman[] $pengirimen
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Supplier'], 'required'],
            [['Id_Supplier'], 'integer'],
            [['Nama_Supplier', 'NoHp_Supplier'], 'string', 'max' => 45],
            [['Alamat_Supplier'], 'string', 'max' => 100],
            [['Jk_Supplier'], 'string', 'max' => 10],
            [['Id_Supplier'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Supplier' => 'Id Supplier',
            'Nama_Supplier' => 'Nama Supplier',
            'Alamat_Supplier' => 'Alamat Supplier',
            'Jk_Supplier' => 'Jk Supplier',
            'NoHp_Supplier' => 'No Hp Supplier',
        ];
    }

    /**
     * Gets query for [[Pengirimen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengirimen()
    {
        return $this->hasMany(Pengiriman::class, ['Id_Supplier' => 'Id_Supplier']);
    }
}
