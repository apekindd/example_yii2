<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Headermenu */

$this->title = 'Добавить';
$this->params['breadcrumbs'][] = ['label' => 'Главное меню', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="headermenu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
