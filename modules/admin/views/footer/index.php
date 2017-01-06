<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Футер меню';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="footer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            //'title_ru',
            //'title_en',
            'link',
            // 'section',
            [
                'attribute' => 'section',
                'value' => function($data){
                    if($data->section == 'courses') return 'Курсы';
                    if($data->section == 'trainings') return 'Тренинги';
                    if($data->section == 'exams') return 'Экзамены';
                    if($data->section == 'about') return 'О компании';
                    if($data->section == 'study') return 'Обучение';
                }
            ],
             'sort',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
