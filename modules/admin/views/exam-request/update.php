<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ExamRequest */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Заявки на экзамены', 'url' => ['index','sort'=>'-date_create']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="exam-request-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
