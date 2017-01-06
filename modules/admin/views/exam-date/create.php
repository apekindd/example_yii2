<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ExamDate */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Записи на экзамены', 'url' => ['index','sort'=>'-date']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exam-date-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
