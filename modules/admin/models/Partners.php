<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "partners".
 *
 * @property integer $id
 * @property string $img
 * @property string $link
 */
class Partners extends Imgmodel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'partners';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            $this->rule,
            $this->rule2,
            [['name'], 'required'],
            [['link','img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Название',
            'id' => 'ID',
            'img' => 'Изображение',
            'image' => 'Изображение',
            'imageAlt' => 'Изображение Alt',
            'imageTitle' => 'Изображение Title',
            'link' => 'Ссылка',
        ];
    }
}
