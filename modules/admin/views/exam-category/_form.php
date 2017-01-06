<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ExamCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exam-category-form">

    <?php $form = ActiveForm::begin(); ?>
    <!-- Навигация -->
    <ul class="nav nav-tabs" role="tablist" style="margin-bottom:30px">
        <li class="active"><a href="#main" aria-controls="posts" role="tab" data-toggle="tab">Основное</a></li>
        <li><a href="#ru" aria-controls="requests" role="tab" data-toggle="tab">RU</a></li>
        <li><a href="#en" aria-controls="requests" role="tab" data-toggle="tab">EN</a></li>
    </ul>

    <!-- Содержимое вкладок -->
    <div class="tab-content">

        <div role="tabpanel" class="tab-pane active" id="main">

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'sort')->textInput() ?>

            <!--DropDownList with Tables-->
            <div class="form-group field-courses-table">
                <label class="control-label" for="exam-category-exams">Экзамен(ы) (Для выбора нескольких таблиц - кнопка Ctrl+левая кнопка мыши)</label>
                <input type="hidden" name="ExamCategory[exams]" value=""><select id="exam-category-exams" class="form-control" name="ExamCategory[exams][]" multiple="multiple" size="4">
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
        </div>
        <div role="tabpanel" class="tab-pane" id="ru">
            <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="en">
            <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
