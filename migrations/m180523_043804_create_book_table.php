<?php

use yii\db\Migration;

/**
 * Handles the creation of table `book`.
 */
class m180523_043804_create_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('book', [
            'id' => $this->primaryKey(),
            'publisher_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'genre' => $this->string()->notNull(),
            'year_published' => $this->integer()->notNull()
        ]);

        $this->createIndex(
            'idx-book-publisher_id',
            'book','publisher_id'
        );

        $this->addForeignKey(
            'fk-book-publisher',
            'book','publisher_id',
            'publisher', 'id'
        );


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-book-publisher','book');
        $this->dropIndex('idx-book-publisher_id', 'book');
        $this->dropTable('book');
    }
}
