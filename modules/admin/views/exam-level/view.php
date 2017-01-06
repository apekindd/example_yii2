<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ExamLevel */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Уровни экзаменов', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exam-level-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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
            'name',
            'sort',
            [
                'attribute' => 'exams',
                'value' => $model->getExams($model->exams),
                'format' => 'html'
            ],
        ],
    ]) ?>

</div>
