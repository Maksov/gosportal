<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $news_id
 * @property string $title
 * @property string $thumb
 * @property string $short
 * @property string $text
 * @property string $slug
 * @property integer $author_id
 * @property integer $time
 * @property integer $views
 * @property integer $status
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
            [['title', 'text'], 'required'],
            [['text'], 'string'],
            [['author_id', 'time', 'views', 'status'], 'integer'],
            [['title', 'thumb', 'slug'], 'string', 'max' => 128],
            [['short'], 'string', 'max' => 1024],
            [['slug'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'news_id' => Yii::t('app', 'News ID'),
            'title' => Yii::t('app', 'Title'),
            'thumb' => Yii::t('app', 'Thumb'),
            'short' => Yii::t('app', 'Short'),
            'text' => Yii::t('app', 'Text'),
            'slug' => Yii::t('app', 'Slug'),
            'author_id' => Yii::t('app', 'Author ID'),
            'time' => Yii::t('app', 'Time'),
            'views' => Yii::t('app', 'Views'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
