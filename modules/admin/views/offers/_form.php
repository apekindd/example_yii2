<?php

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Offers */
/* @var $form yii\widgets\ActiveForm */

$script = <<< JS
    $(document).on('change','#offers-type' ,function(){
        productList($(this).val());
    });
    
    var type = $('#offers-type :selected').val();
    //if($('#offers-product_id').val() != ''){
        productList(type);
    //}
    
    function productList(type){
        if($('#offers-product_id').val() == ''){
            $('#offers-product_id').val('');
        }
        $('#offers-product_id option').hide();
        $('#see').show();
        if(type != ''){
            $('#offers-product_id option[data-type="'+type+'"]').show();
        }
    }
JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>

<div class="offers-form">

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

            <!--DropDownList with TYPES-->
            <div class="form-group field-courses-table">
                <label class="control-label" for="offers-type">Тип продукта</label>
                <input type="hidden" name="Offers[type]" value=""><select id="offers-type" class="form-control" name="Offers[type]" >
                    <?php
                    foreach(Yii::$app->params['offerProducts'] as $id=>$name){?>
                        <option <?= ($model->type == $id) ? 'selected' : '' ?> value="<?= $id ?>"><?= $name ?></option>
                    <?php } ?>
                </select>

                <div class="help-block"></div>
            </div>
            <!--END.DropDownList with TYPES-->


            <!--DropDownList with PRODUCTS-->
            <div class="form-group field-courses-table">
                <label class="control-label" for="offers-product_id">Продукт</label>
                <input type="hidden" name="Offers[product_id]" value=""><select id="offers-product_id" class="form-control" name="Offers[product_id]" >
                    <option id="see" data-id=""></option>
                    <?php foreach($model->products as $type=>$products){ ?>
                        <?php foreach($products as $id=>$product){ ?>
                            <option <?= ($model->type == $type && $model->product_id == $id) ? 'selected' : '' ?> data-type="<?= $type ?>" data-id="<?= $id ?>" value="<?= $id ?>"><?= $product ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>

                <div class="help-block"></div>
            </div>
            <!--END.DropDownList with PRODUCTS-->

            <?php
            echo $form->field($model, 'text')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]);
            ?>
            <?if(!empty($model->img)):?>
                <img src="/images/<?=$model->img?>" alt=""><br>
                <a href="<?=Url::to(['offers/delimg', 'img'=> base64_encode( implode("|",[$model->img,$model->id]) )])?>">Удалить</a>
            <?endif;?>
            <?= $form->field($model, 'image')->fileInput() ?>
            <?= $form->field($model, 'imageAlt')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'imageTitle')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'important')->dropDownList([ '0'=>'Нет', '1'=>'Да']) ?>
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
