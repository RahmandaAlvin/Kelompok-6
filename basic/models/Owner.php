<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "owner".
 *
 * @property int $Id_Owner
 * @property string|null $Nama_Owner
 * @property string|null $Alamat_Owner
 * @property string|null $Jk_Owner
 * @property string|null $NoHp_Owner
 *
 * @property Pemesanan[] $pemesanans
 */
class Owner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'owner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Owner'], 'required'],
            [['Id_Owner'], 'integer'],
            [['Nama_Owner', 'NoHp_Owner'], 'string', 'max' => 45],
            [['Alamat_Owner'], 'string', 'max' => 100],
            [['Jk_Owner'], 'string', 'max' => 10],
            [['Id_Owner'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Owner' => 'Id Owner',
            'Nama_Owner' => 'Nama Owner',
            'Alamat_Owner' => 'Alamat Owner',
            'Jk_Owner' => 'Jk Owner',
            'NoHp_Owner' => 'No Hp Owner',
        ];
    }

    /**
     * Gets query for [[Pemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemesanans()
    {
        return $this->hasMany(Pemesanan::class, ['Id_Owner' => 'Id_Owner']);
    }
}
