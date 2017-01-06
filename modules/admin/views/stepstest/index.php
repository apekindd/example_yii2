<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '5 шагов к тестированию';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stepstest-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            //'title_ru',
            //'title_en',
            'description:ntext',
            // 'description_ru:ntext',
            // 'description_en:ntext',
             'step',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
