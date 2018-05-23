<?php

use yii\db\Migration;

/**
 * Handles the creation of table `book`.
 */
class m180523_021834_create_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('book', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('book');
    }
}
