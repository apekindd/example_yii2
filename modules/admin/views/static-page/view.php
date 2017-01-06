<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\StaticPage */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Статические страницы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="static-page-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Точно удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php
    $arSection = [''=>'','study'=>'Обучение','about'=>'О компании'];
    ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'symbol',
            'title',
            'title_ru',
            'title_en',
            'text:html',
            'text_ru:html',
            'text_en:html',
            'description',
            'description_ru',
            'description_en',
            'keywords',
            'keywords_ru',
            'keywords_en',
            //'section',
            [
                'attribute' => 'section',
                'value' => $arSection[$model->section],
            ],
        ],
    ]) ?>

</div>
