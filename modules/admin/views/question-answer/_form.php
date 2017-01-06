<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\QuestionAnswer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="question-answer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // $form->field($model, 'test')->textInput(['maxlength' => true]) ?>

    <!--DropDownList with Tables-->
    <div class="form-group field-courses-table">
        <label class="control-label" for="question_answer-test">Тест(ы) (Для выбора нескольких таблиц - кнопка Ctrl+левая кнопка мыши)</label>
        <input type="hidden" name="QuestionAnswer[test]" value=""><select id="question_answer-test" class="form-control" name="QuestionAnswer[test][]" multiple="multiple" size="4">
            <?php
            $temp = explode('|', $model->test);
            $t = [];
            foreach ($temp as $tp){
                $t[$tp]=$tp;
            }

            foreach($model->allTests as $id=>$test){?>
                <option <?= ($t[$id]) ? 'selected' : '' ?> value="<?= $id ?>"><?= $test ?></option>
            <?php } ?>
        </select>

        <div class="help-block"></div>
    </div>
    <!--END.DropDownList with Tables-->

    <?= $form->field($model, 'question')->textInput(['maxlength' => true]) ?>
    <h4>Ответы</h4>
    <i>Вариант ответа | правильный ответ</i>
    <?php $this->registerCss("#answers{list-style-type: none;} input[type='radio']{margin-left:40px} ul li{padding-top:10px} i{font-size:11px} #add{margin-top:10px} #sub{margin-top:50px} .answer{width:80%}");?>

    <ul id="answers">
        <?php if(empty($model->answer)){?>
        <li><input class="answer" type="text" name="answer[0]" /><input type="radio" name="it_is_answer[0]" /></li>
        <?php }else{ ?>
            <?php
            $arAnswers = unserialize($model->answer);
            foreach($arAnswers as $id=>$item){?>
                <li><input class="answer" type="text" name="answer[<?= $id ?>]" value="<?= htmlspecialchars(base64_decode($item['text'])) ?>" /><input type="radio" name="it_is_answer[<?= $id ?>]" <?= ($item['answer'] === "Y") ? 'checked' : ''?> /></li>
            <?php }?>
        <?php } ?>
        <button id="add" type="button" class="btn btn-warning">добавить</button>
    </ul>

    <?php // $form->field($model, 'answer')->textarea(['rows' => 6]) ?>


    <div class="form-group" id="sub">
        <hr style="border-color:#000" />
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$js = <<<JS
$(document).on('click','#add', function(){
    var id = $('input[type="radio"]').length;
    $('#answers li:last').after('<li><input class="answer" type="text" name="answer['+id+']" /><input type="radio" name="it_is_answer['+id+']" /></li>');
});

$(document).on('change','input[type="radio"]', function(){
    $('input[type="radio"]:not(input[name="'+$(this).attr('name')+'"])').attr('checked',false);    
});
JS;

$this->registerJs($js);
?>
