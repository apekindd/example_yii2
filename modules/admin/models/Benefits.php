<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "benefits".
 *
 * @property integer $id
 * @property string $title
 * @property string $title_ru
 * @property string $title_en
 * @property string $text
 * @property string $text_ru
 * @property string $text_en
 * @property integer $step
 */
class Benefits extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'benefits';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['step'], 'integer'],
            [['title', 'title_ru', 'title_en', 'text', 'text_ru', 'text_en'], 'string', 'max' => 255],
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
            'step' => 'Номер',
        ];
    }
}
