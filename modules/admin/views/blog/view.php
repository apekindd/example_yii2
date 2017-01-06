<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Blog */

$this->title = "Просмотр записи";
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-view">

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
            'title_ru',
            'title_en',
            'text',
            'text_ru',
            'text_en',
            'date',
            'keywords',
            'keywords_ru',
            'keywords_en',
            'description',
            'description_ru',
            'description_en',
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
        ],
    ]) ?>

</div>
