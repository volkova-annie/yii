<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $image
 * @property string $date
 * @property integer $is_deleted
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'body', 'date'], 'required'],
            [['title', 'body'], 'string'],
            [['date'], 'safe'],
            [['is_deleted'], 'integer'],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'body' => 'Text',
            'image' => 'Image',
            'date' => 'Date',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
