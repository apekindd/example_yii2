<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ExamRequest */

$this->title = 'Заявки на экзамены';
$this->params['breadcrumbs'][] = ['label' => 'Создать', 'url' => ['index','sort'=>'-date_create']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exam-request-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
