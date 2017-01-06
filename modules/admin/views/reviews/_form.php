<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use mihaildev\elfinder\ElFinder;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Reviews */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reviews-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <!-- Навигация -->
    <ul class="nav nav-tabs" role="tablist" style="margin-bottom:30px">
        <li class="active"><a href="#main" aria-controls="posts" role="tab" data-toggle="tab">Основное</a></li>
        <li><a href="#ru" aria-controls="requests" role="tab" data-toggle="tab">RU</a></li>
        <li><a href="#en" aria-controls="requests" role="tab" data-toggle="tab">EN</a></li>
        <li><a href="#video" aria-controls="requests" role="tab" data-toggle="tab">Видеоотзыв</a></li>
    </ul>
    <!-- Содержимое вкладок -->
    <div class="tab-content">

        <div role="tabpanel" class="tab-pane active" id="main">

            <?= $form->field($model, 'page')->checkboxList(\app\modules\admin\models\Reviews::getPages()) ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?if(!empty($model->img)):?>
                <img src="/images/<?=$model->img?>" alt=""><br>
                <a href="<?=Url::to(['reviews/delimg', 'img'=> base64_encode( implode("|",[$model->img,$model->id]) )])?>">Удалить</a>
            <?endif;?>
            <?= $form->field($model, 'image')->fileInput() ?>
            <?= $form->field($model, 'imageAlt')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'imageTitle')->textInput(['maxlength' => true]) ?>
            
            <? echo $form->field($model, 'text')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="ru">
            <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
            <? echo $form->field($model, 'text_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="en">
            <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>
            <? echo $form->field($model, 'text_en')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="video">
            <?= $form->field($model, 'video')->textInput()->label('Ссылка на видео') ?>
           <?/* <?= $form->field($model, 'page')->checkboxList(\app\modules\admin\models\Reviews::getPages())*/ ?>
        </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Созать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
