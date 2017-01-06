<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Блог';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать запись', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            //'title_ru',
            //'title_en',
            //'text', 
            // 'text_ru',
            // 'text_en',
            // 'date',
            // 'keywords',
            // 'keywords_ru',
            // 'keywords_en',
            // 'description',
            // 'description_ru',
            // 'description_en',
            // 'img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
