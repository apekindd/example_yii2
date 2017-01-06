<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
\Yii::$app->language = 'ru-RU';
$this->title = 'Преподаватели';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teachers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'position:ntext',
            // 'text_ru:ntext',
            // 'text_en:ntext',
            // 'img:ntext',
            // 'position',
            // 'position_ru',
            // 'position_en',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
