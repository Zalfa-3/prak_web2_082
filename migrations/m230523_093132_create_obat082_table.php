<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%obat082}}`.
 */
class m230523_093132_create_obat082_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%obat082}}', [
            'id' => $this->primaryKey(),
            'kode_obat' => $this ->string()->notNull(),
            'harga'=> $this ->decimal(10,2)->notNull(),
            'stok_obat'=> $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%obat082}}');
    }
}
