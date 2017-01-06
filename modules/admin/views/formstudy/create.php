<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Formstudy */

$this->title = 'Create Formstudy';
$this->params['breadcrumbs'][] = ['label' => 'Formstudies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="formstudy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
