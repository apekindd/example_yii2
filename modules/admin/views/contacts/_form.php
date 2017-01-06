<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Contacts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contacts-form">
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
            <?= $form->field($model, 'lat')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'lng')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'text')->textarea(['rows' => 4]) ?>
            <?= $form->field($model, 'extra_name')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'tels')->textarea(['rows' => 4]) ?>
            <?= $form->field($model, 'email')->textarea(['rows' => 2]) ?>
            <?= $form->field($model, 'schedule')->textarea(['rows' => 4]) ?>
            <?echo  $form->field($model, 'isStudyCenter')->dropDownList([0=>'Нет',1=>'Да']) ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="ru">
            <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'text_ru')->textarea(['rows' => 4]) ?>
            <?= $form->field($model, 'extra_name_ru')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'schedule_ru')->textarea(['rows' => 4]) ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="en">
            <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'text_en')->textarea(['rows' => 4]) ?>
            <?= $form->field($model, 'extra_name_en')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'schedule_en')->textarea(['rows' => 4]) ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
