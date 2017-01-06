<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Courses */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Курсы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="courses-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'anons:html',
            'text:html',
            'keywords',
            'description',
            'leftcol:html',
            'price',
            'parent_id',
            'backgroundimg',
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
            'show_detail',
            'symbol',
            'title_ru',
            'title_en',
            'anons_ru:html',
            'anons_en:html',
            'text_ru:html',
            'text_en:html',
            'keywords_ru',
            'keywords_en',
            'description_ru',
            'description_en',
            'leftcol_ru:html',
            'leftcol_en:html',
            'sort',
            [
                'attribute'=>'table',
                'value'=>$model->getTableNames($model->table),
                'format' => 'html'
            ]
        ],
    ]) ?>

</div>
