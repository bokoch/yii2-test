<?php

use yii\db\Migration;

/**
 * Handles the creation of table `logs`.
 */
class m181128_145155_create_logs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('logs', [
            'id' => $this->primaryKey(),
            'time' => $this->integer(11),
            'key' => $this->char(8),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('logs');
    }
}
