<?php
use yii\helpers\Url;
$this->title = $training->title;
?>
<?php if ($this->beginCache($cache['key'],$cache['options'])) { ?>
    <? $subs = explode('/', $sub);
    $this->params['breadcrumbs'][] = ['label'=>Yii::t('app', $subs[0]), 'url'=>[$subs[1]]];
    $this->params['breadcrumbs'][] = $training->title; ?>
<div class="container">
    <div class="section section_no-p">
        <div class="section__title section__title_left">
            <h1><?=$training->title?></h1>
        </div>
        <div class="section__text section__text_slim">
            <?=$training->text?>
        </div>
    </div>
<? foreach ($trainingModuls as $item):?>
    <div class="module module_large">
        <div class="module__title">
            <?=$item->title?>: <?=$item->anons?>
        </div>
        <div class="module__descr">
            <?=$item->text?>
        </div>
        <div class="module__bottom">
            <div class="module__right-block">
                <div class="module__descr">
                    <?= Yii::t('app', 'Дати проведення курсу:');?>
                </div>
                <div class="module__date">
                    <?=$item->date?>
                </div>
            </div>
            <div class="module__btn">
                <a class="btn btn_green btn_b-dark-green btnz" data-title="<?= $item->nameEsputnik ?>"><?= Yii::t('app', 'Записатись');?></a>
            </div>
        </div>
    </div>
<? endforeach;?>
    <?//= $this->render('_tutors',['tutors'=>$tutors]);?>
</div>
    <?= $form ?>
    <script>
        var ES_MODULE_COURSES = <?= ES_MODULE_COURSES ?>;
    </script>
    <?php
    $script =
        <<<JS
    $(document).on('click','.btnz' , function(){
    $('input[name="'+ES_MODULE_COURSES+'"]').val($(this).data('title'));
});
JS;
    $this->registerJs($script);
    ?>
    <?php
    $this->endCache();
}
if ($this->beginCache('trainings_'.Yii::$app->language,$cache['options'])) {
    echo '<div style="display:none;"></div>';
    $this->endCache();
}
?>
