<?php

use yii\db\Migration;

/**
 * Handles the creation of table `publisher`.
 */
class m180523_043648_create_publisher_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('publisher', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'country' => $this->string()->notNull(),
            'personal_background' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('publisher');
    }
}
