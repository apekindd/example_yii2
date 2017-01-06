<?php

namespace app\modules\admin\models;

use Yii;
use yii\web\UploadedFile;

class Blog extends Imgmodel
{
    /**
     * @var UploadedFile
     */

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            $this->rule,
            $this->rule2,
            [['date','img'], 'safe'],
            [['title','text','date'], 'required'],
            [['text','text_ru','text_en'], 'string'],
            [['title', 'title_ru', 'title_en', 'keywords', 'keywords_ru', 'keywords_en', 'description', 'description_ru', 'description_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'title_ru' => 'Заголовок Ru',
            'title_en' => 'Заголовок En',
            'text' => 'Текст',
            'text_ru' => 'Текст Ru',
            'text_en' => 'Текст En',
            'date' => 'Дата',
            'keywords' => 'Ключевые слова',
            'keywords_ru' => 'Ключевые слова Ru',
            'keywords_en' => 'Ключевые слова En',
            'description' => 'Описание',
            'description_ru' => 'Описание Ru',
            'description_en' => 'Описание En',
            'img' => 'Изображение',
            'image' => 'Изображение',
            'imageAlt' => 'Изображение Alt',
            'imageTitle' => 'Изображение Title',
        ];
    }

    public function beforeSave($insert)
    {
        $this->date = strtotime($this->date);
        return parent::beforeSave($insert);
    }

}
