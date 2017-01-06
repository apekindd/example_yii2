<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "static_page".
 *
 * @property integer $id
 * @property string $symbol
 * @property string $title
 * @property string $title_ru
 * @property string $title_en
 * @property string $description
 * @property string $description_ru
 * @property string $description_en
 * @property string $keywords
 * @property string $keywords_ru
 * @property string $keywords_en
 * @property string $text
 * @property string $text_ru
 * @property string $text_en
 * @property string $section
 */
class StaticPage extends AppTableModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'static_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title','symbol'], 'required'],
            [['section','table'], 'safe'],
            [['text', 'text_ru', 'text_en'], 'string'],
            [['symbol', 'title', 'title_ru', 'title_en', 'description', 'description_ru', 'description_en', 'keywords', 'keywords_ru', 'keywords_en', 'section'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'symbol' => 'Символьный код',
            'title' => 'Заголовок',
            'title_ru' => 'Заголовок(Ru)',
            'title_en' => 'Заголовок(En)',
            'description' => 'Мета-описание',
            'description_ru' => 'Мета-описание(Ru)',
            'description_en' => 'Мета-описание(En)',
            'keywords' => 'Ключевые слова',
            'keywords_ru' => 'Ключевые слова(Ru)',
            'keywords_en' => 'Ключевые слова(En)',
            'text' => 'Описание',
            'text_ru' => 'Описание(Ru)',
            'text_en' => 'Описание(En)',
            'section' => 'Раздел',
            'table' => 'Таблица(ы) (Для выбора нескольких таблиц - кнопка Ctrl+левая кнопка мыши)',
        ];
    }

    public function beforeSave($insert)
    {   
        $this->table = implode("|",$this->table);
        return parent::beforeSave($insert);
    }
}
