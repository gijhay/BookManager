<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property int $publisher_id
 * @property string $title
 * @property string $genre
 * @property int $year_published
 *
 * @property Publisher $publisher
 * @property BookAuthor[] $bookAuthors
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['publisher_id', 'title', 'genre', 'year_published'], 'required'],
            [['publisher_id', 'year_published'], 'integer'],
            [['title', 'genre'], 'string', 'max' => 255],
            [['publisher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Publisher::className(), 'targetAttribute' => ['publisher_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'genre' => 'Genre',
            'year_published' => 'Year Published',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPublisher()
    {
        return $this->hasOne(Publisher::className(), ['id' => 'publisher_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookAuthors()
    {
        return $this->hasMany(BookAuthor::className(), ['book_id' => 'id']);
    }
}
