<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Акции';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="offers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать акцию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            [
                'attribute' => 'type',
                'value' => function($model){
                    return Yii::$app->params['offerProducts'][$model->type];
                }
            ],
            [
                'attribute' => 'product_id',
                'value'     => function($model) {
                    return (is_object($obj = $model->getProduct($model->type, $model->product_id))) ?
                        "<a href='" . \yii\helpers\Url::to(["/admin/{$model->type}/view", 'id' => $obj->id]) . "'>{$obj->title}</a>" : '-';
                },
                'format'    => 'html'
            ],
            //'text:html',
            //'date',
            //'img',
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
             //'important',
            [
                'attribute' => 'important',
                'value' => function($data){
                    return !$data->important ? 'Нет' : 'Да';
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
