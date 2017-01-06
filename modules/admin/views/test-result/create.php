<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\TestResult */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Результаты', 'url' => ['index','sort'=>'-date_time']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-result-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
