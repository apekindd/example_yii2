<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "static_text".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $content_ru
 * @property string $content_en
 */
class StaticText extends \yii\db\ActiveRecord
{

    public function afterFind()
    {
        if (Yii::$app->language == 'ru') {
            $this->content = $this->content_ru;
        } elseif (Yii::$app->language == 'en') {
            $this->content = $this->content_en;
        }
    }

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
            [['content', 'content_ru', 'content_en'], 'string'],
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
            'title' => 'Title',
            'content' => 'Content',
            'content_ru' => 'Content Ru',
            'content_en' => 'Content En',
        ];
    }
}
