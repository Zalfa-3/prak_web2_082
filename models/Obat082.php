<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat082".
 *
 * @property int $id
 * @property string $kode_obat
 * @property string $harga
 * @property string $stok_obat
 */
class Obat082 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat082';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_obat', 'harga', 'stok_obat'], 'required'],
            [['kode_obat'], 'string', 'max' => 20],
            [['harga'], 'string', 'max' => 10],
            [['stok_obat'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_obat' => 'Kode Obat',
            'harga' => 'Harga',
            'stok_obat' => 'Stok Obat',
        ];
    }
}
