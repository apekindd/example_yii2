<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "stepstest".
 *
 * @property integer $id
 * @property string $title
 * @property string $title_ru
 * @property string $title_en
 * @property string $description
 * @property string $description_ru
 * @property string $description_en
 * @property integer $step
 */
class Stepstest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stepstest';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'title_ru', 'title_en', 'description', 'description_ru', 'description_en', 'step'], 'required'],
            [['description', 'description_ru', 'description_en'], 'string'],
            [['step'], 'integer'],
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
            'description' => 'Описание',
            'description_ru' => 'Описание Ru',
            'description_en' => 'Описание En',
            'step' => 'Шаг',
        ];
    }
}
