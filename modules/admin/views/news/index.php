<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
\Yii::$app->language = 'ru-RU';
$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cоздать новость', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'text:html',
            // 'date',
            'img',
            // 'title_ru',
            // 'title_en',
            // 'text_ru:ntext',
            // 'text_en:ntext',
            // 'keywords',
            // 'keywords_ru',
            // 'keywords_en',
            // 'description',
            // 'description_ru',
            // 'description_en',
            // 'prev_img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
