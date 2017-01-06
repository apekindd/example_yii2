<?php

namespace app\modules\admin\models;

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
            'name' => 'Название',
            'description' => 'Описание экзамена',
            'description_ru' => 'Описание экзамена(Ru)',
            'description_en' => 'Описание экзамена(En)',
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
