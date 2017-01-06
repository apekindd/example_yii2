<?php

use yii\helpers\Html;
use yii\jui\DatePicker;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

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
            <?php
            echo $form->field($model, 'text')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]);
            ?>


            <?if(!empty($model->img)):?>
                <table>
                <?foreach ($model->img as $item):?>
                    <tr >
                        <td style="padding: 10px">
                            <img src="/images/<?=$item->img?>" alt="" style="max-width: 200px; max-height: 200px"><br>
                        </td>
                        <td>
                            <a href="<?=Url::to(['news/delimg', 'img'=> base64_encode( implode("|",[$item->img,$model->id]) )])?>">Удалить</a>
                        </td>
                    </tr>

                <?endforeach;?>
                </table>
            <?endif;?>
            <?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
            <?= $form->field($model, 'imageFilesAlt')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'imageFilesTitle')->textInput(['maxlength' => true]) ?>


            <?if(!empty($model->prev_img)):?>
                <img src="/images/<?=$model->prev_img?>" alt=""><br>
                <a href="<?=Url::to(['news/delimgone', 'img'=> base64_encode( implode("|",[$model->prev_img,$model->id]) )])?>">Удалить</a>
            <?endif;?>
            <?= $form->field($model, 'image')->fileInput() ?>
            <?= $form->field($model, 'imageAlt')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'imageTitle')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
            <b>Дата:</b>
            <?
            echo DatePicker::widget([
                'model' => $model,
                'attribute' => 'date',
                'language' => 'ru',
                'dateFormat' => 'dd-MM-yyyy',
            ]);
            ?><br><br>
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
            ]);
            ?>
            <?= $form->field($model, 'keywords_en')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'description_en')->textInput(['maxlength' => true]) ?>
        </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
