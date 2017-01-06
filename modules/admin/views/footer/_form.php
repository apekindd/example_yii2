<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Footer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="footer-form">

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
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'section')->dropDownList([
                'courses'=>'Курсы',
                'trainings'=>'Тренинги',
                'exams'=>'Экзамены',
                'about'=>'О компании',
                'study'=>'Обучение',
            ]) ?>
            <?= $form->field($model, 'sort')->textInput() ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="ru">
            <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="en">
            <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
        </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
