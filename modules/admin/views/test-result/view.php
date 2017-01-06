<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\TestResult */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Результаты', 'url' => ['index','sort'=>'-date_time']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-result-view">

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
            'email:email',
            'date_time',
            'test',
            'result',
        ],
    ]) ?>

</div>
