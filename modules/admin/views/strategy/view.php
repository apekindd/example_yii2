<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Strategy */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Strategies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="strategy-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'text:ntext',
            'text_ru:ntext',
            'text_en:ntext',
        ],
    ]) ?>

</div>
