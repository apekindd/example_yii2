<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "teachers".
 *
 * @property integer $id
 * @property string $name
 * @property string $name_ru
 * @property string $name_en
 * @property string $text
 * @property string $text_ru
 * @property string $text_en
 * @property string $img
 * @property string $position
 * @property string $position_ru
 * @property string $position_en
 */
class Teachers extends Imgmodel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imageAlt','imageTitle'], 'string'],
            [['image'], 'file', 'extensions' => 'png, jpg'],
            [['name'], 'required'],
            [['isDelta'], 'safe'],
            [['text', 'text_ru', 'text_en', 'img'], 'string'],
            [['name', 'name_ru', 'name_en', 'position', 'position_ru', 'position_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'name_ru' => 'Имя(Ru)',
            'name_en' => 'Имя(En)',
            'text' => 'Описание',
            'text_ru' => 'Описание(Ru)',
            'text_en' => 'Описание(En)',
            'img' => 'Фото',
            'position' => 'Должность',
            'position_ru' => 'Должность(Ru)',
            'position_en' => 'Должность(En)',
            'isDelta' => 'Выводить в тренинге Delta',
            'image' => 'Картинка',
            'imageAlt' => 'Картинка Alt',
            'imageTitle' => 'Картинка Title',
        ];
    }
}
