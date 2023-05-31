<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mhs082}}`.
 */
class m230530_031729_create_mhs082_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mhs082}}',[
            'id' => $this->primaryKey(),
            'no_induk_mahasiswa' => $this->string()->notNull(),
            'nama_mahasiswa' => $this->string()->notNull(),
            'kelas' => $this->string()->notNull(),
            'status' =>  $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mhs082}}');
    }
}
