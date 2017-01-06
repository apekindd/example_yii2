<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Вопросы-ответы';
$this->params['breadcrumbs'][] = $this->title;
\Yii::$app->language = 'ru-RU';
?>
<div class="question-answer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'test',

            'question',
            //'answer:ntext',
            [
                'attribute' => 'answer',
                'value'=>function($model){
                    $res = '';
                    foreach(unserialize($model->answer) as $ans){
                        if($ans['answer'] == 'Y'){
                            $res .= "<i><b class='text-success'>".base64_decode($ans['text'])."</b></i><br/>";
                        }else{
                            $res .= "<i>".base64_decode($ans['text'])."</i><br/>";
                        }
                    }
                    return $res;
                },
                'format' => 'html'
            ],
            [
                'attribute'=>'test',
                'value'=>function($model){
                    $e = explode("|", $model->test);
                    array_shift($e);
                    array_pop($e);
                    $tests = \app\modules\admin\models\OnlineTest::find()->where(['id'=>$e])->all();
                    $res = '';
                    foreach($tests as $test){
                        $res .= "<a href='".\yii\helpers\Url::to(['/admin/online-test/view','id'=>$test->id])."'>{$test->name}</a><br/>";
                    }
                    return $res;
                },
                'format'=>'html'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
