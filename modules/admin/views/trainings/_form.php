
<?php

use vova07\imperavi\Widget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use mihaildev\elfinder\ElFinder;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Trainings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trainings-form">

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
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            <? echo $form->field($model, 'anons')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>
            <? echo $form->field($model, 'text')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>
            <? echo $form->field($model, 'rightcol')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>
            <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
            <?
            $arr = \yii\helpers\ArrayHelper::map(\app\modules\admin\models\Trainings::find()->where("parent_id=0")->all(), 'id', 'title');
            $arr[0] =  "Нет";
            unset($arr[$model->id]);
            ksort($arr);
            ?>

            <?echo  $form->field($model, 'parent_id')->dropDownList($arr) ?>

            <?if(!empty($model->img)):?>
                <img src="/images/<?=$model->img?>" alt=""><br>
                <a href="<?=Url::to(['trainings/delimg', 'img'=> base64_encode( implode("|",[$model->img,$model->id]) )])?>">Удалить</a>
            <?endif;?>
            <?= $form->field($model, 'image')->fileInput() ?>
            <?= $form->field($model, 'imageAlt')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'imageTitle')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'show_detail')->checkbox(['checked' => '1']) ?>
            <?= $form->field($model, 'symbol')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
            <? echo $form->field($model, 'date')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>
            <?= $form->field($model, 'sort')->textInput(['maxlength' => true]) ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="ru">
            <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>
            <? echo $form->field($model, 'anons_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>
            <? echo $form->field($model, 'text_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>
            <? echo $form->field($model, 'rightcol_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>
            <?= $form->field($model, 'keywords_ru')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'description_ru')->textInput(['maxlength' => true]) ?>
            <? echo $form->field($model, 'date_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="en">
            <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
            <? echo $form->field($model, 'anons_en')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>
            <? echo $form->field($model, 'text_en')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>
            <? echo $form->field($model, 'rightcol_en')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>
            <?= $form->field($model, 'keywords_en')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'description_en')->textInput(['maxlength' => true]) ?>
            <? echo $form->field($model, 'date_en')->widget(CKEditor::className(),[
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
