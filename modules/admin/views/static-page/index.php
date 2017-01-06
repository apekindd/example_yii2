<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
\Yii::$app->language = 'ru-RU';
$this->title = 'Статические страницы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="static-page-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',

            'title',
            'symbol',
            //'title_ru',
            //'title_en',
            // 'description',
            // 'description_ru',
            // 'description_en',
            // 'keywords',
            // 'keywords_ru',
            // 'keywords_en',
             //'text:ntext',
            // 'text_ru:ntext',
            // 'text_en:ntext',
            //'section',
            [
                'attribute' => 'section',
                'value' => function($data){
                    $arSection = [''=>'','study'=>'Обучение','about'=>'О компании'];
                    return $arSection[$data->section];
                },
            ],

            ['class' => 'yii\grid\ActionColumn',
                'template'=>'{view}{update}{delete}{page}',
                'buttons'=>[
                    'page' => function ($url, $model) {
                        if($model->symbol != ''){
                            $link = "/{$model->section}/".$model->symbol;
                            return Html::a('<span class="glyphicon glyphicon-globe"></span>', $link, [
                                'title' => Yii::t('yii', 'Show page'),
                            ]);
                        }
                    },
                    'delete' => function ($url, $model) {
                        $arr = [1,2];
                        if(!in_array($model->id,$arr)){
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                'title' => Yii::t('yii', 'Delete page'),
                            ]);
                        }
                    }
                ]
            ],
        ],
    ]); ?>
</div>
