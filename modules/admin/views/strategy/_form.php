<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\elfinder\ElFinder;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Strategy */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="strategy-form">

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
            <? echo $form->field($model, 'text')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="ru">
            <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>
            <? echo $form->field($model, 'text_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="en">
            <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
            <? echo $form->field($model, 'text_en')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>
        </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
