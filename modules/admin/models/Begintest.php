<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "begintest".
 *
 * @property integer $id
 * @property string $title
 * @property string $title_ru
 * @property string $title_en
 * @property integer $step
 * @property string $img
 */
class Begintest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'begintest';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'title_ru', 'title_en', 'step', 'img'], 'required'],
            [['step'], 'integer'],
            [['title', 'title_ru', 'title_en'], 'string', 'max' => 255],
            [['img'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'id' => 'ID',
            'title' => 'Заголовок',
            //'title_ru' => 'Заголовок Ru',
            //'title_en' => 'Заголовок En',
            'step' => 'Шаг',
            //'img' => 'Картинка',
        ];
    }
}
