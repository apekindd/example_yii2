<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Trainings */

$this->title = 'Добавить тренинг';
$this->params['breadcrumbs'][] = ['label' => 'Тренинги', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trainings-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
