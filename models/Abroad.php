<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "abroad".
 *
 * @property integer $id
 * @property string $title
 * @property string $title_ru
 * @property string $title_en
 * @property string $anons
 * @property string $anons_ru
 * @property string $anons_en
 * @property string $text
 * @property string $text_ru
 * @property string $text_en
 * @property string $keywords
 * @property string $keywords_ru
 * @property string $keywords_en
 * @property string $description
 * @property string $description_ru
 * @property string $description_en
 * @property string $image
 * @property integer $is_main
 * @property string $symbol
 */
class Abroad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'abroad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'title_ru', 'title_en', 'anons', 'anons_ru', 'anons_en', 'text', 'text_ru', 'text_en', 'keywords', 'keywords_ru', 'keywords_en', 'description', 'description_ru', 'description_en', 'image', 'symbol'], 'required'],
            [['text', 'text_ru', 'text_en', 'image','link'], 'string'],
            [['is_main'], 'integer'],
            [['title', 'title_ru', 'title_en', 'anons', 'anons_ru', 'anons_en', 'keywords', 'keywords_ru', 'keywords_en', 'description', 'description_ru', 'description_en', 'symbol'], 'string', 'max' => 255],
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
            'anons' => 'Анонс',
            'anons_ru' => 'Анонс Ru',
            'anons_en' => 'Анонс En',
            'text' => 'Текст',
            'text_ru' => 'Текст Ru',
            'text_en' => 'Текст En',
            'keywords' => 'Ключевые слова',
            'keywords_ru' => 'Ключевые слова Ru',
            'keywords_en' => 'Ключевые слова En',
            'description' => 'Описание',
            'description_ru' => 'Описание Ru',
            'description_en' => 'Описание En',
            'image' => 'Изображение',
            'is_main' => 'Главна',
            'symbol' => 'Символ',
            'link' => 'Ссылка',
        ];
    }
}
