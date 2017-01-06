<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "static_text".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 */
class StaticText extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'static_text';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content','title'], 'required'],
            [['content','content_ru','content_en'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название записи',
            'content' => 'Содержимое',
        ];
    }
}
