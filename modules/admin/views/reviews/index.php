<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
\Yii::$app->language = 'ru-RU';
$this->title = 'Отзывы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reviews-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'page',
            'name',
            //'img',
            //'name_ru',
            // 'name_en',
            // 'text:ntext',
            // 'text_ru:ntext',
            // 'text_en:ntext',
            //'video:ntext',
            [
                'attribute' => 'video',
                'value' => function($data){
                    return !$data->video ? 'Нет' : 'Да';
                },
            ],
            [
                'attribute' => 'page',
                'value'=> function ($data) {
                    $str = "";
                    foreach (\app\modules\admin\models\Reviews::getPages() as $key => $page) {
                        if(in_array($key, $data->page)) $str .= "<p>{$page}</p>";
                    }
                    return $str;
                },
                'format' => 'html'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
