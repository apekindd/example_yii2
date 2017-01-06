<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Главная';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mainpage-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mainpage', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title:ntext',
            'title_ru:ntext',
            'title_en:ntext',
            //'keywords:ntext',
            // 'keywords_ru:ntext',
            // 'keywords_en:ntext',
            // 'description:ntext',
            // 'description_ru:ntext',
            // 'description_en:ntext',
            // 'link',
            // 'img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
