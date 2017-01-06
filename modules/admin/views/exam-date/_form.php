<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datetimepicker\DateTimePicker;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\ExamDate */
/* @var $form yii\widgets\ActiveForm */

//$model->date = '12.09.2016 10:10';
?>

<div class="exam-date-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?php // $form->field($model, 'date')->textInput(['maxlength' => true]) ?>

    <div class="form-group field-examdate-date col-md-6" style="padding:0">
        <label class="control-label" for="examdate-date">Дата и время проведения экзамена</label>
        <?php echo DateTimePicker::widget([
            'model' => $model,
            'attribute' => 'date',
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

    <div class="form-group field-examdate-registration_to col-md-6" style="padding:0">
        <label class="control-label" for="examdate-registration_to">Регистрация до(включительно)</label>
        <br/>
        <?
        echo DatePicker::widget([
            'model' => $model,
            'attribute' => 'registration_to',
            'language' => 'ru',
            'dateFormat' => 'dd.MM.yyyy',
        ]);
        ?>
    </div>
    <br style="clear:both" />

    <?= $form->field($model, 'close')->dropDownList([ '0'=>"Отображать", '1'=>'Скрыть']) ?>

    <?php // $form->field($model, 'exam_item_id')->textInput() ?>
    <!--DropDownList with Tables-->
    <div class="form-group field-courses-table">
        <label class="control-label" for="exam-date-exam_item_id">Экзамен</label>
        <input type="hidden" name="ExamDate[exam_item_id]" value=""><select id="exam-date-exam_item_id" class="form-control" name="ExamDate[exam_item_id]" size="4">
            <?php
            foreach($model->exams as $id=>$exam){?>
                <option <?= ($model->exam_item_id == $id) ? 'selected' : '' ?> value="<?= $id ?>"><?= $exam ?></option>
            <?php } ?>
        </select>

        <div class="help-block"></div>
    </div>
    <!--END.DropDownList with Tables-->

    <?= $form->field($model, 'duration')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
