<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "headermenu".
 *
 * @property integer $id
 * @property string $title_ua
 * @property string $title_ru
 * @property string $title_en
 * @property integer $parent_id
 * @property integer $sort
 * @property string $link
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
            [['parent_id', 'sort'], 'integer'],
            [['title_ua', 'title_ru', 'title_en', 'link'], 'string', 'max' => 255],
        ];
    }
    
    public function getParents(){
        return $this->hasOne(Headermenu::className(), ['id'=>'parent_id']);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_ua' => 'Название Ua',
            'title_ru' => 'Название Ru',
            'title_en' => 'Название En',
            'parent_id' => 'Уровень',
            'sort' => 'Сортировка',
            'link' => 'Ссылка',
        ];
    }
}
