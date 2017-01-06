<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "headermenu".
 *
 * @property integer $id
 * @property string $title
 * @property string $title_ru
 * @property string $title_en
 * @property integer $parent_id
 * @property integer $sort
 */
class Headermenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'headermenu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'title_ru', 'title_en'], 'required'],
            [['parent_id', 'sort'], 'integer'],
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
            'title' => 'Title',
            'title_ru' => 'Title Ru',
            'title_en' => 'Title En',
            'parent_id' => 'Parent ID',
            'sort' => 'Sort',
        ];
    }
}
