<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\QuestionAnswer */

$this->title = $model->question;
$this->params['breadcrumbs'][] = ['label' => 'Вопросы-ответы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\Yii::$app->language = 'ru-RU';
?>
<div class="question-answer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            //'test',

            'question',
            //'answer:ntext',
            [
                'attribute' => 'answer',
                'value'=> returnAnswers($model),
                'format' => 'html'
            ],
            [
                'attribute'=>'test',
                'value'=> returnTest($model),
                'format'=>'html'
            ],
        ],
    ]) ?>
<?php
    function returnAnswers($model){
        $res = '';
        foreach(unserialize($model->answer) as $ans){
            if($ans['answer'] == 'Y'){
                $res .= "<i><b class='text-success'>".base64_decode($ans['text'])."</b></i><br/>";
            }else{
                $res .= "<i>".base64_decode($ans['text'])."</i><br/>";
            }
        }
        return $res;
    }

    function returnTest($model){
        $e = explode("|", $model->test);
        array_shift($e);
        array_pop($e);
        $tests = \app\modules\admin\models\OnlineTest::find()->where(['id'=>$e])->all();
        $res = '';
        foreach($tests as $test){
            $res .= "<a href='".\yii\helpers\Url::to(['/admin/online-test/view','id'=>$test->id])."'>{$test->name}</a><br/>";
        }
        return $res;
    }
    ?>
</div>
