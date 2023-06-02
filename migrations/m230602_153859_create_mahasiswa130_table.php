<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswa130}}`.
 */
class m230602_153859_create_mahasiswa130_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa130}}', [
            'id130' => $this->primaryKey(),
            'nim130' => $this->string()->notNull(),
            'nama130' => $this->string()->notNull(),
            'kelas130' => $this->string()->notNull(),
            'status130' => $this->string()->notNull(),
        ]); 
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa130}}');
    }
}
