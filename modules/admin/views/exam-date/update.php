<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ExamDate */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Записи на экзамены', 'url' => ['index','sort'=>'-date']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="exam-date-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
