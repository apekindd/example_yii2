<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ExamRequest */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Exam Requests', 'url' => ['index','sort'=>'-date_create']];
$this->params['breadcrumbs'][] = $model->fio;
\Yii::$app->language = 'ru-RU';
?>
<div class="exam-request-view">

    <h1><?= Html::encode($model->fio) ?></h1>

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
            'fio',
            'email:email',
            'phone',
            'birth',

            'exam',
            'exam_date',
            'price',
            //'date_create',
            [
                'attribute' => 'date_create',
                'value' => date('d.m.Y H:i', $model->date_create)
            ],
            'comment:ntext',
        ],
    ]) ?>

</div>
