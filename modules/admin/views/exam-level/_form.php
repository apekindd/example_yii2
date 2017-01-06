<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExamLevel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exam-level-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?php // $form->field($model, 'exams')->textInput(['maxlength' => true]) ?>

    <!--DropDownList with Tables-->
    <div class="form-group field-courses-table">
        <label class="control-label" for="exam-level-exams">Экзамен(ы) (Для выбора нескольких таблиц - кнопка Ctrl+левая кнопка мыши)</label>
        <input type="hidden" name="ExamLevel[exams]" value=""><select id="exam-level-exams" class="form-control" name="ExamLevel[exams][]" multiple="multiple" size="4">
            <?php
            $temp = explode('|', $model->exams);
            $t = [];
            foreach ($temp as $tp){
                $t[$tp]=$tp;
            }

            foreach($model->examss as $id=>$exam){?>
                <option <?= ($t[$id]) ? 'selected' : '' ?> value="<?= $id ?>"><?= $exam ?></option>
            <?php } ?>
        </select>

        <div class="help-block"></div>
    </div>
    <!--END.DropDownList with Tables-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
