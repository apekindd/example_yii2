<?php
use yii\helpers\Url;
$this->title = $training->title;
?>
<?php if ($this->beginCache($cache['key'],$cache['options'])) { ?>
    <? $subs = explode('/', $sub);
    $this->params['breadcrumbs'][] = ['label'=>Yii::t('app', $subs[0]), 'url'=>[$subs[1]]];
    $this->params['breadcrumbs'][] = $training->title; ?>
    <?= $this->render('_offers',['offers'=>$offers]);?>
<div class="container">
    <div class="course-col">
        <div class="course-block course-block_bg">
            <div class="course-block__title">
                <h1><?=$training->title?></h1>
            </div>
            <div class="course-block__descr">
                <?=$training->anons?>
            </div>

                <!--    <p>--><?//=$training->text?><!--</p>-->
                <p><?=$training->date?></p>
        </div>
    </div>
    <div class="course-col course-col_sidebar">
        <div class="course-sidebar">
            <div class="course-sidebar__header">
                <div class="course-sidebar__title">
                    <h2><?= Yii::t('app', 'Для кого цей курс');?></h2>
                </div>
                <div class="course-sidebar__price">
                    <?= Yii::t('app', 'Вартість');?><span><?=$training->price?> <?= Yii::t('app', 'грн');?></span>
                </div>
            </div>
            <div class="course-sidebar__descr">
                <?=$training->rightcol?>
            </div>
            <div class="course-sidebar__descr">
                <?= Yii::t('app', 'Діє система знижок!');?>
            </div>
        <?if($training->show_detail === 1):?>
            <div class="course-sidebar__button course-sidebar__button_first">
                <a href="<?=Url::to(['site/trainings', 'symbol'=> $training->symbol . "_detail"])?>" class="course-sidebar__btn btn btn_light-blue btn_b-dark-blue"><?= Yii::t('app', 'Докладніше');?></a>
            </div>
        <?endif;?>
        </div>
    </div>
    <div class="modules-block">
        <div class="modules-block__descr">
            <?=$training->rightcol?>
        </div>
        <? foreach ($trainingModuls as $item):?>
            <div class="module">
                <div class="module__title">
                    <?=$item->title?>
                </div>
                <div class="module__descr">
                    <?=$item->anons?>
                </div>
                <div class="module__bottom">
                    <div class="module__descr">
                        <?= Yii::t('app', 'Дати проведення курса');?>
                    </div>
                    <div class="module__date">
                        <?=$item->date?>
                    </div>
                    <div class="module__btn">
                        <a class="btn btn_green btn_b-dark-green btnz" data-title="<?= $item->nameEsputnik ?>"><?= Yii::t('app', 'Записатись');?></a>
                    </div>
                </div>
            </div>
        <? endforeach;?>

    </div>
</div>
<div class="exam-block exam-block_no-m">
    <div class="exam-block__container container">
        <div class="exam-block__title">
            <h2></h2>
        </div>
        <div class="exam-block__text">
            <?=$training->text?>
        </div>
    </div>
</div>

<?= $this->render('_reviews',['reviews'=>$reviews]);?>
<?= $this->render('_trainingsList');?>
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

