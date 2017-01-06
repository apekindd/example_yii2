<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\StaticPage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="static-page-form">
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
            <?= $form->field($model, 'symbol')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            <?php
            echo $form->field($model, 'text')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]);
            ?>
            <?= $form->field($model, 'section')->dropDownList([ ''=>'', 'study'=>'Обучение', 'about'=>'О компании', 'abroad'=>'Обучение за рубежом' ]) ?>
            <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
            <!--DropDownList with Tables-->
            <div class="form-group field-staticpage-table">
                <label class="control-label" for="staticpage-table">Таблица(ы) (Для выбора нескольких таблиц - кнопка Ctrl+левая кнопка мыши)</label>
                <input type="hidden" name="StaticPage[table]" value=""><select id="staticpage-table" class="form-control" name="StaticPage[table][]" multiple="multiple" size="4">
                    <?php
                    $temp = explode('|', $model->table);
                    $t = [];
                    foreach ($temp as $tp){
                        $t[$tp]=$tp;
                    }

                    foreach($model->tables as $id=>$table){?>
                        <option <?= ($t[$id]) ? 'selected' : '' ?> value="<?= $id ?>"><?= $table ?></option>
                    <?php } ?>
                </select>

                <div class="help-block"></div>
            </div>
            <!--END.DropDownList with Tables-->
        </div>
        <div role="tabpanel" class="tab-pane" id="ru">
            <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>
            <?php
            echo $form->field($model, 'text_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]);
            ?>
            <?= $form->field($model, 'keywords_ru')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'description_ru')->textInput(['maxlength' => true]) ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="en">
            <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
            <?php
            echo $form->field($model, 'text_en')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]);?>
            <?= $form->field($model, 'keywords_en')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'description_en')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>


</div>
