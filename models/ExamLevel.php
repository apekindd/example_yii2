<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/**
 * This is the model class for table "exam_level".
 *
 * @property integer $id
 * @property string $name
 * @property integer $sort
 * @property string $exams
 */
class ExamLevel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'exam_level';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort'], 'integer'],
            [['name', 'exams'], 'string', 'max' => 255],
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
            'sort' => 'Сортировка',
            'exams' => 'Экзамены',
        ];
    }

    public function getExams($exams){
        $e = explode("|", $exams);
        $arExams = ExamItem::find()->where(['id'=>$e])->all();
        $result = '';
        if(!empty($arExams)) {
            foreach ($arExams as $item) {
                $result .= "<a href='".Url::to(['/admin/exam-item/view','id'=>$item->id])."'>{$item->name}</a><br/>";
            }
            return $result;
        }else{
            return false;
        }
    }

    public function getExamss(){
        return ArrayHelper::map(ExamItem::find()->asArray()->all(), 'id', 'name');
    }
}
