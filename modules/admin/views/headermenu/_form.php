<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Headermenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="headermenu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?
    $arr = \yii\helpers\ArrayHelper::map(\app\modules\admin\models\Headermenu::find()->all(), 'id', 'title_ua');
    $arr[0] =  "0";
    unset($arr[$model->id]);
    ksort($arr);
    ?>

    <?echo  $form->field($model, 'parent_id')->dropDownList($arr) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
