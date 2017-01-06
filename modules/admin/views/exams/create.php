<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Exams */
\Yii::$app->language = 'ru-RU';
$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Экзамены', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exams-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
