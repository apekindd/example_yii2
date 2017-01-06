<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории экзаменов';
$this->params['breadcrumbs'][] = $this->title;
\Yii::$app->language = 'ru-RU';
?>
<div class="exam-category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sort',
            'name',
            //'name_ru',
            //'name_en',

            [
                'attribute' => 'exams',
                'value' => function($model){
                    return $model->getExams($model->exams);
                },
                'format' => 'html'
            ],
            // 'exams',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
