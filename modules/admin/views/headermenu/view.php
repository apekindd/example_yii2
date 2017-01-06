<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Headermenu */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Главное меню', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="headermenu-view">

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
            //'id',
            'title_ua',
            'title_ru',
            'title_en',
            //'parent_id',
            'sort',
            'link',
        ],
    ]) ?>

</div>
