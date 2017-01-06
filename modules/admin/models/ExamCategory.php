<?php

namespace app\modules\admin\models;

use app\models\ExamItem;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

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
            'name' => 'Название',
            'name_ru' => 'Название(Ru)',
            'name_en' => 'Название(En)',
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
