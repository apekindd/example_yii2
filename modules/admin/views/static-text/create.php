<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\StaticText */

$this->title = 'Create Static Text';
$this->params['breadcrumbs'][] = ['label' => 'Static Texts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="static-text-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
