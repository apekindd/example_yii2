<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property integer $id
 * @property string $text
 * @property string $text_ru
 * @property string $text_en
 * @property string $map
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['isStudyCenter'], 'safe'],
            [['text', 'text_ru', 'text_en', 'tels', 'schedule', 'schedule_ru', 'schedule_en', 'email', 'name_ru','name','name_en'], 'string'],
            [['lat','lng'], 'string', 'max' => 20],
            [['extra_name','extra_name_ru','extra_name_en'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tels' => 'Телефоны',
            'email' => 'E-mails',
            'extra_name' => 'Доп. заголовок',
            'extra_name_ru' => 'Доп. заголовок(Ru)',
            'extra_name_en' => 'Доп. заголовок(En)',
            'schedule' => 'График',
            'schedule_ru' => 'График(Ru)',
            'schedule_en' => 'График(En)',
            'text' => 'Адрес',
            'text_ru' => 'Адрес(Ru)',
            'text_en' => 'Адрес(En)',
            'name' => 'Название',
            'name_ru' => 'Название(Ru)',
            'name_en' => 'Название(En)',
            'lat' => 'Долгота',
            'lng' => 'Широта',
            'isStudyCenter' => 'Выводить в форме записи на курс',
        ];
    }
}
