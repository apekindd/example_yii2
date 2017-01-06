<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use mihaildev\elfinder\ElFinder;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Courses */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="courses-form">
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
            <?if($model->parent_id == 53) echo $form->field($model, 'subtitle')->textInput(['maxlength' => true]) ?>

            <?php echo $form->field($model, 'anons')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>

            <?php echo $form->field($model, 'text')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>

            <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

            <?php echo $form->field($model, 'leftcol')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>

            <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

            <?
            $arr = \yii\helpers\ArrayHelper::map(\app\modules\admin\models\Courses::find()->all(), 'id', 'title');
            $arr[0] =  "Нет";
            unset($arr[$model->id]);
            ksort($arr);
            ?>

            <?echo  $form->field($model, 'parent_id')->dropDownList($arr) ?>

            <?if(!empty($model->backgroundimg)):?>
                <img src="/images/<?=$model->backgroundimg?>" alt=""><br>
                <a href="<?=Url::to(['courses/delimgbg', 'img'=> base64_encode( implode("|",[$model->backgroundimg,$model->id]) )])?>">Удалить</a>
            <?endif;?>
            <?= $form->field($model, 'bg')->fileInput() ?>

            <?if(!empty($model->img)):?>
                <img src="/images/<?=$model->img?>" alt=""><br>
                <a href="<?=Url::to(['courses/delimg', 'img'=> base64_encode( implode("|",[$model->img,$model->id]) )])?>">Удалить</a>
            <?endif;?>
            <?= $form->field($model, 'image')->fileInput() ?>
            <?= $form->field($model, 'imageAlt')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'imageTitle')->textInput(['maxlength' => true]) ?>


            <?= $form->field($model, 'show_detail')->dropDownList([ '0'=>'Нет', '1'=>'Да']) ?>

            <?= $form->field($model, 'symbol')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'sort')->textInput(['maxlength' => true]) ?>
            <!--DropDownList with Tables-->
            <div class="form-group field-courses-table">
                <label class="control-label" for="courses-table">Таблица(ы) (Для выбора нескольких таблиц - кнопка Ctrl+левая кнопка мыши)</label>
                <input type="hidden" name="Courses[table]" value=""><select id="courses-table" class="form-control" name="Courses[table][]" multiple="multiple" size="4">
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
            <?if($model->parent_id == 53) echo  $form->field($model, 'subtitle_ru')->textInput(['maxlength' => true]) ?>
            <?php echo $form->field($model, 'anons_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>

            <?php echo $form->field($model, 'text_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>
            
            <?= $form->field($model, 'keywords_ru')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'description_ru')->textInput(['maxlength' => true]) ?>
            <?php echo $form->field($model, 'leftcol_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="en">
            <?if($model->parent_id == 53) echo  $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'subtitle_en')->textInput(['maxlength' => true]) ?>

            <?php echo $form->field($model, 'anons_en')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>

            <?php echo $form->field($model, 'text_en')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions([
                    'elfinder',
                ],[]),
            ]); ?>

            <?= $form->field($model, 'keywords_en')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description_en')->textInput(['maxlength' => true]) ?>

            <?php echo $form->field($model, 'leftcol_en')->widget(CKEditor::className(),[
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
