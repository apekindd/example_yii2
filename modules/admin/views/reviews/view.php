<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Reviews */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Отзывы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reviews-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            //'page',
            [
                'attribute' => 'page',
                'value'=> call_user_func(function ($data) {
                    $str = "";
                    foreach (\app\modules\admin\models\Reviews::getPages() as $key => $page) {
                        if(in_array($key, $data->page)) $str .= "{$page}<br />";
                    }
                    return $str;
                }, $model),
                'format' => 'html'
            ],
            'name',
            [
                'attribute' => 'img',
                'value' => call_user_func(function($data){
                    if(!empty($data->img))
                        return '<img src="/images/'.$data->img.'" alt="" style="max-width:250px">';
                    else
                        return '';
                },$model),
                'format' => 'raw'
            ],
            'name_ru',
            'name_en',
            'text:raw',
            'text_ru:raw',
            'text_en:raw',
            'video:ntext',
        ],
    ]) ?>

</div>
