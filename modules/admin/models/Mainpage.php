<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "mainpage".
 *
 * @property integer $id
 * @property string $title
 * @property string $title_ru
 * @property string $title_en
 * @property string $keywords
 * @property string $keywords_ru
 * @property string $keywords_en
 * @property string $description
 * @property string $description_ru
 * @property string $description_en
 * @property string $link
 * @property string $img
 */
class Mainpage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mainpage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'title_ru', 'title_en',  'link'], 'required'],
            [['title', 'title_ru', 'title_en', 'keywords', 'keywords_ru', 'keywords_en', 'description', 'description_ru', 'description_en'], 'string'],
            [['link', 'img'], 'string', 'max' => 255],
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
            'title_ru' => 'Title Ru',
            'title_en' => 'Title En',
            'link' => 'Link',
            'img' => 'Img',
        ];
    }
}
