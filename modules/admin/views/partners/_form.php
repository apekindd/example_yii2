<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Partners */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="partners-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?if(!empty($model->img)):?>
        <img src="/images/<?=$model->img?>" alt=""><br>
        <a href="<?=Url::to(['partners/delimg', 'img'=> base64_encode( implode("|",[$model->img,$model->id]) )])?>">Удалить</a>
    <?endif;?>
    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'imageAlt')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'imageTitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
