<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ExamDate */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Записи на экзамены', 'url' => ['index','sort'=>'-date']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exam-date-view">

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
            'price',
            'date',
            'registration_to',
            /*[
                'attribute'=>'date',
                'value'=>date('d.m.Y H:i', $model->date)
            ],
            [
                'attribute'=>'registration_to',
                'value'=>date('d.m.Y', $model->registration_to)
            ],*/
            [
                'attribute'=>'close',
                'value'=>(!$model->close) ? "<span class='text-success'>Отображать</span>" : "<span class='text-danger'>Скрыть</span>",
                'format' => "html"
            ],
            //'close',
            [
                'attribute'=>'exam_item_id',
                'value'=> "<a href='".\yii\helpers\Url::to(['/admin/exam-item/view','id'=>$model->examItem->id])."'>".$model->examItem->name."</a>",
                'format' => 'html'
            ],
            'duration',
        ],
    ]) ?>

</div>
