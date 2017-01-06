<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exam_item".
 *
 * @property integer $id
 * @property string $name
 * @property integer $sort
 * @property string $description
 * @property string $description_ru
 * @property string $description_en
 *
 * @property ExamDate[] $examDates
 */
class ExamItem extends \yii\db\ActiveRecord
{
    public function afterFind()
    {
        if(Yii::$app->language == 'ru') {
            $this->description = $this->description_ru;

        } elseif (Yii::$app->language == 'en') {
            $this->description = $this->description_en;
        }
        return true;
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'exam_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'description_ru', 'description_en'], 'string'],
            [['name'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'description_ru' => 'Description Ru',
            'description_en' => 'Description En',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExamDates()
    {
        return $this->hasMany(ExamDate::className(), ['exam_item_id' => 'id']);
    }
}
