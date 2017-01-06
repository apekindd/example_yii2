<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Exams */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="exams-form">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <!-- Навигация -->
    <ul class="nav nav-tabs" role="tablist" style="margin-bottom:30px">
        <li class="active"><a href="#main" aria-controls="posts" role="tab" data-toggle="tab">Основное</a></li>
        <li><a href="#ru" aria-controls="requests" role="tab" data-toggle="tab">RU</a></li>
        <li><a href="#en" aria-controls="requests" role="tab" data-toggle="tab">EN</a></li>
    </ul>
    <!-- Содержимое вкладок -->
    <div class="tab-content">

        <div role="tabpanel" class="tab-pane active" id="main">
            <!--DropDownList with Tables-->
            <div class="form-group field-courses-table">
                <label class="control-label" for="exams-exam_id">Тип экзамена <span style="font-size:12px; font-style:italic">(создается в разделе "Каледарь экзаменов"->"Экзамены")</span><span style="font-weight:bold;color:red;font-size:15px"> *</span></label>
                <input type="hidden" name="Exams[exam_id]" value=""><select id="exams-exam_id" class="form-control" name="Exams[exam_id]" size="4">
                    <option value="">-</option>
                    <?php
                    foreach($model->getExamsItem() as $id=>$exam){?>
                        <option <?= ($model->exam_id == $id) ? 'selected' : '' ?> value="<?= $id ?>"><?= $exam ?></option>
                    <?php } ?>
                </select>

                <div class="help-block"></div>
            </div>
            <!--END.DropDownList with Tables-->


            <?= $form->field($model, 'symbol')->textInput(['maxlength' => true]) ?>
            <div class="form-group field-exams-parent_id">
                <label class="control-label" for="exams-parent_id">Родитель</label>
                <select id="exams-parent_id" class="form-control" name="Exams[parent_id]">
                    <?php $arCats = $model->categories; ?>
                    <option value="0">-</option>
                    <?php foreach($arCats as $id=>$cat){ ?>
                     <option <?=($id == $model->parent_id) ? 'selected' : ''?> value="<?= $id ?>"><?= $cat ?></option>
                    <?php } ?>
                </select>
                <div class="help-block"></div>
            </div>
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            <?php
            echo $form->field($model, 'anons')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]);
            ?>
            <?= $form->field($model, 'abbr')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'abbr_text')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'level')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'level_text')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
            <?php
            echo $form->field($model, 'bottom_text')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]);
            ?>
            <?if(!empty($model->img)):?>
                <img src="/images/<?=$model->img?>" alt=""><br>
                <a href="<?=Url::to(['exams/delimg', 'img'=> base64_encode( implode("|",[$model->img,$model->id]) )])?>">Удалить</a>
            <?endif;?>
            <?= $form->field($model, 'image')->fileInput() ?>
            <?= $form->field($model, 'imageAlt')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'imageTitle')->textInput(['maxlength' => true]) ?>
            
            <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

        </div>
        <div role="tabpanel" class="tab-pane" id="ru">
            <?= $form->field($model, 'title_ru')->textInput(['rows' => 6]) ?>
            <?php
            echo $form->field($model, 'anons_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]);
            ?>
            <?= $form->field($model, 'level_text_ru')->textInput(['maxlength' => true]) ?>
            <?php
            echo $form->field($model, 'bottom_text_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]);
            ?>
            <?= $form->field($model, 'keywords_ru')->textInput(['rows' => 6]) ?>
            <?= $form->field($model, 'description_ru')->textInput(['rows' => 6]) ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="en">
            <?= $form->field($model, 'title_en')->textInput(['rows' => 6]) ?>
            <?php
            echo $form->field($model, 'anons_en')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]);
            ?>
            <?= $form->field($model, 'level_text_en')->textInput(['maxlength' => true]) ?>
            <?php
            echo $form->field($model, 'bottom_text_en')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]);
            ?>
            <?= $form->field($model, 'keywords_en')->textInput(['rows' => 6]) ?>
            <?= $form->field($model, 'description_en')->textInput(['rows' => 6]) ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
