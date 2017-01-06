<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Тренинги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trainings-index">

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
            //'anons:ntext',
            //'text:ntext',
            //'date:ntext',
            // 'keywords',
            // 'description',
            // 'rightcol',
            // 'price',
             //'parent_id',
            [
                'attribute' => 'parent_id',
                'value' => function ($data) {
                    if(!is_object($data->trainings)) return "-";
                    return $data->trainings->title ? $data->trainings->title : "-";
                }
            ],
             'sort',
            // 'img',
            // 'show_detail',
            // 'symbol',
            // 'title_ru',
            // 'title_en',
            // 'anons_ru',
            // 'anons_en',
            // 'text_ru',
            // 'text_en',
            // 'date_ru',
            // 'date_en',
            // 'keywords_ru',
            // 'keywords_en',
            // 'description_ru',
            // 'description_en',
            // 'rightcol_ru',
            // 'rightcol_en',

            ['class' => 'yii\grid\ActionColumn',
                'template'=>'{view}{update}{delete}{page}',
                'buttons'=>[
                    'page' => function ($url, $model) {
                        if($model->symbol != ''){
                            $link = "/trainings/".$model->symbol;
                            return Html::a('<span class="glyphicon glyphicon-globe"></span>', $link, [
                                'title' => Yii::t('yii', 'Show page'),
                            ]);
                        }
                    },
                    'delete' => function ($url, $model) {
                        $arr = [1,6,7,8,9,12,51];
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
