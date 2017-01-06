<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Главное меню';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="headermenu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title_ua',
            'title_ru',
            'title_en',
            [
                'attribute' => 'parent_id',
                'value' => function ($data) {
                    if(!is_object($data->parents)) return "-";
                    return $data->parents->title_ua ? $data->parents->title_ua : "-";
                }
            ],
            // 'sort',
            // 'link',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
