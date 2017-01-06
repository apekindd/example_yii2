<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "strategy".
 *
 * @property integer $id
 * @property string $title
 * @property string $title_ru
 * @property string $title_en
 * @property string $text
 * @property string $text_ru
 * @property string $text_en
 */
class Strategy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'strategy';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'text_ru', 'text_en'], 'string'],
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
            'title' => 'Заголовок',
            'title_ru' => 'Заголовок Ru',
            'title_en' => 'Заголовок En',
            'text' => 'Текст',
            'text_ru' => 'Текст Ru',
            'text_en' => 'Текст En',
        ];
    }
}
