<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mhs082".
 *
 * @property int $id
 * @property string $no_induk_mahasiswa
 * @property string $nama_mahasiswa
 * @property string $kelas
 * @property string $status
 */
class Mhs082 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mhs082';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_induk_mahasiswa', 'nama_mahasiswa', 'kelas', 'status'], 'required'],
            [['no_induk_mahasiswa', 'nama_mahasiswa', 'kelas', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID_082',
            'no_induk_mahasiswa' => 'No Induk Mahasiswa_082',
            'nama_mahasiswa' => 'Nama Mahasiswa_082',
            'kelas' => 'Kelas_082',
            'status' => 'Status_082',
        ];
    }
}
