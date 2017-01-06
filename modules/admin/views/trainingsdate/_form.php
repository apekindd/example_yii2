<?php

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\TrainingsDate */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trainings-date-form">

    <?php $form = ActiveForm::begin(); ?>

    <?//= $form->field($model, 'training_id')->textInput() ?>

    <?
    $arr = \yii\helpers\ArrayHelper::map(\app\modules\admin\models\Trainings::find()->where("parent_id=0")->all(), 'id', 'title');
    unset($arr[$model->id]);
    ksort($arr);
    ?>

    <?echo  $form->field($model, 'training_id')->dropDownList($arr) ?>

    <?//= $form->field($model, 'date_from')->textInput() ?>

    <?= $form->field($model, 'date_from')->widget(\yii\jui\DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'dd-MM-yyyy',
    ]) ?>

    <?//= $form->field($model, 'date_to')->textInput() ?>

    <?= $form->field($model, 'date_to')->widget(\yii\jui\DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'dd-MM-yyyy',
    ]) ?>

    <?//= $form->field($model, 'is_full_time')->textInput() ?>

    <?= $form->field($model, 'is_full_time')->dropDownList([ '1'=>"Да", '0'=>'Нет']) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_en')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
