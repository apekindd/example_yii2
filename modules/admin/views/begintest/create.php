<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Begintest */

$this->title = 'Добавить';
$this->params['breadcrumbs'][] = ['label' => 'Begintests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="begintest-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>