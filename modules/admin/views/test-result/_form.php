<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datetimepicker\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\TestResult */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="test-result-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'date_time')->textInput(['maxlength' => true]) ?>
    <div class="form-group field-examdate-date col-md-6" style="padding:0">
        <label class="control-label" for="examdate-date">Дата и время проведения экзамена</label>
        <?php echo DateTimePicker::widget([
            'model' => $model,
            'attribute' => 'date_time',
            'language' => 'ru',
            'size' => 'ms',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'dd.mm.yyyy HH:ii',
                'todayBtn' => true
            ]
        ]);?>
    </div>
    <br style="clear:both" />

    <?= $form->field($model, 'test')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'result')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
