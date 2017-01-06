<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Программы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="levels-index">

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
            'left_column:html',
            //'left_column_ru',
            //'left_column_en',
            //'text:html',
            // 'text_ru:ntext',
            // 'text_en:ntext',
            [
                'attribute' => 'page',
                'value'=> function ($data) {
                    $str = "";
                    foreach (\app\modules\admin\models\Levels::getPages() as $key => $page) {
                        if(in_array($key, $data->page)) $str .= "<p>- {$page}</p>";
                    }
                    return $str;
                },
                'format' => 'html'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
