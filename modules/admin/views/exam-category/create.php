<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ExamCategory */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Категории экзаменов', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exam-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
