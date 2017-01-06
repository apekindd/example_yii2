<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Записи на экзамены';
$this->params['breadcrumbs'][] = $this->title;
$arExams = \yii\helpers\ArrayHelper::map(\app\models\ExamItem::find()->asArray()->all(),'id','name');
\Yii::$app->language = 'ru-RU';
?>
<div class="exam-date-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'price',
            'date',
            'registration_to',
            /*[
                'attribute'=>'date',
                'value'=>function($model){
                    return date('d.m.Y H:i', $model->date);
                },
            ],
            [
                'attribute'=>'registration_to',
                'value'=>function($model){
                    return date('d.m.Y', $model->registration_to);
                },
            ],*/
            [
                'attribute'=>'exam_item_id',
                'value'=>function($model){
                    return "<a href='".\yii\helpers\Url::to(['/admin/exam-item/view','id'=>$model->examItem->id])."'>".$model->examItem->name."</a>";
                },
                'format'=>'html'
            ],
            [
                'attribute'=>'close',
                'value'=>function($model){
                    return (!$model->close) ? "<span class='text-success'>Отображать</span>" : "<span class='text-danger'>Скрыть</span>";
                },
                'format' => "html"
            ],
            //'registration_to',
            //'close',
            // 'exam_item_id',
            // 'duration',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
