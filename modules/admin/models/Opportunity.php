<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "opportunity".
 *
 * @property integer $id
 * @property string $title
 * @property string $title_ru
 * @property string $title_en
 * @property string $img
 */
class Opportunity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'opportunity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'title_ru', 'title_en'], 'required'],
            [['title', 'title_ru', 'title_en', 'img'], 'string', 'max' => 255],
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
            'img' => 'Картинка',
        ];
    }
}
