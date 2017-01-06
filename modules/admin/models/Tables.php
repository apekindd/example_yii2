<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "tables".
 *
 * @property integer $id
 * @property string $title
 * @property string $title_ru
 * @property string $title_en
 * @property string $text
 * @property string $text_ru
 * @property string $text_en
 * @property integer $sort
 */
class Tables extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tables';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'title_ru', 'title_en', 'text', 'text_ru', 'text_en'], 'required'],
            [['text', 'text_ru', 'text_en'], 'string'],
            [['sort'], 'integer'],
            [['title', 'title_ru', 'title_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Таб',
            'title_ru' => 'Таб Ru',
            'title_en' => 'Таб En',
            'text' => 'Таблица',
            'text_ru' => 'Таблица Ru',
            'text_en' => 'Таблица En',
            'sort' => 'Сортировка',
        ];
    }
}
