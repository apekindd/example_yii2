<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exam_category".
 *
 * @property integer $id
 * @property string $name
 * @property string $name_ru
 * @property string $name_en
 * @property integer $sort
 * @property string $exams
 */
class ExamCategory extends \yii\db\ActiveRecord
{

    public function afterFind()
    {
        if(Yii::$app->language == 'ru') {
            $this->name = $this->name_ru;

        } elseif (Yii::$app->language == 'en') {
            $this->name = $this->name_en;
        }
        return true;
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'exam_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort'], 'integer'],
            [['name', 'name_ru', 'name_en', 'exams'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'sort' => 'Sort',
            'exams' => 'Exams',
        ];
    }
}
