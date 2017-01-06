<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Статические тексты';
$this->params['breadcrumbs'][] = $this->title;
\Yii::$app->language = 'ru-RU';
?>
<div class="static-text-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php // Html::a('Create Static Text', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            'content:html',

            ['class' => 'yii\grid\ActionColumn',
                'template'=>'{view}{update}{page}',
                'buttons'=>[
                    'page' => function ($url, $model) {
                        $arLinks = [
                            '1' => \yii\helpers\Url::to(['/exams/registration']),
                            '2' => \yii\helpers\Url::to(['/exams/registration'])
                        ];
                        if(!empty($arLinks[$model->id])){
                            return Html::a('<span class="glyphicon glyphicon-globe"></span>', $arLinks[$model->id],
                                ['title' => Yii::t('yii', 'Show page'),'target'=>'_blank']);
                        }
                    },
                ]
            ],
        ],
    ]); ?>


</div>
