<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "footer".
 *
 * @property integer $id
 * @property string $title
 * @property string $title_ru
 * @property string $title_en
 * @property string $link
 * @property string $section
 * @property integer $sort
 */
class Footer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'footer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'link', 'section'], 'required'],
            [['sort'], 'integer'],
            [['title', 'title_ru', 'title_en', 'link', 'section'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'title_ru' => 'Название Ru',
            'title_en' => 'Название En',
            'link' => 'Ссылка',
            'section' => 'Раздел',
            'sort' => 'Сортировка',
        ];
    }
}
