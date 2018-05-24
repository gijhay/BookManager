<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "publisher".
 *
 * @property int $id
 * @property string $name
 * @property string $country
 * @property string $personal_background
 *
 * @property publisher[] $publisher
 */
class Publisher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'publisher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'country', 'personal_background'], 'required'],
            [['name', 'country'], 'string', 'max' => 255],
            [['personal_background'], 'string', 'max' => 10000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'country' => 'Country',
            'personal_background' => 'Background',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['publisher_id' => 'id']);
    }
}
