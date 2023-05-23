<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Krs".
 *
 * @property string|null $km
 * @property string|null $matakulish
 * @property string|null $sks
 */
class Krs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Krs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['km'], 'string', 'max' => 6],
            [['matakulish'], 'string', 'max' => 15],
            [['sks'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'km' => 'Km',
            'matakulish' => 'Matakulish',
            'sks' => 'Sks',
        ];
    }
}
