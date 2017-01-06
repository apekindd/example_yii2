<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Преимущества';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="benefits-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать преимущество', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            //'title_ru',
            //'title_en',
            'text',
            // 'text_ru',
            // 'text_en',
             'step',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
