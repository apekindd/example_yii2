<?php

namespace app\modules\admin\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "question_answer".
 *
 * @property integer $id
 * @property string $test
 * @property string $question
 * @property string $answer
 */
class QuestionAnswer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'question_answer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['question'], 'required'],
            [['answer'], 'string'],
            [['test', 'question'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'test' => 'Тест(ы)',
            'question' => 'Вопрос',
            'answer' => 'Ответы',
        ];
    }

    public function getTests($tests){
        $e = explode("|", $tests);
        array_shift($e);
        array_pop($e);
        $arTests = ExamItem::find()->where(['id'=>$e])->all();
        $result = '';
        if(!empty($arTests)) {
            foreach ($arTests as $item) {
                $result .= "<a href='".Url::to(['/admin/online-test/view','id'=>$item->id])."'>{$item->name}</a><br/>";
            }
            return $result;
        }else{
            return false;
        }
    }

    public function getAllTests(){
        return ArrayHelper::map(OnlineTest::find()->asArray()->all(), 'id', 'name');
    }
}
