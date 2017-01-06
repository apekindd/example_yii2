<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Курсы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="courses-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить курс', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            'title',
            //'anons:ntext',
            //'text:ntext',
            //'keywords',
            // 'description',
            // 'leftcol',
            // 'price',
            [
                'attribute' => 'parent_id',
                'value' => function ($data) {
                    if(!is_object($data->courses)) return "-";
                    return $data->courses->title ? $data->courses->title : "-";
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
            // 'keywords_ru',
            // 'keywords_en',
            // 'description_ru',
            // 'description_en',
            // 'leftcol_ru',
            // 'leftcol_en',
            // 'sort',

            ['class' => 'yii\grid\ActionColumn',
                'template'=>'{view}{update}{delete}{page}',
                'buttons'=>[
                    'page' => function ($url, $model) {
                        if($model->symbol != ''){
                            $link = "/courses/".$model->symbol;
                            return Html::a('<span class="glyphicon glyphicon-globe"></span>', $link, [
                                'title' => Yii::t('yii', 'Show page'),
                            ]);
                        }
                        if($model->id ==100){//курсы главная
                            $link = "/courses";
                            return Html::a('<span class="glyphicon glyphicon-globe"></span>', $link, [
                                'title' => Yii::t('yii', 'Show page'),
                            ]);
                        }
                    },
                    'delete' => function ($url, $model) {
                        $arr = [12,4,50,10,51,1,53,100];
                        if(!in_array($model->id,$arr)){
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                'title' => Yii::t('yii', 'Show page'),
                            ]);
                        }
                    }
                ]
            ],

        ],
    ]); ?>
</div>