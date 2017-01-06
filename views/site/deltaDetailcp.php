<?php
$this->title = $training->title;
?>
<?php if ($this->beginCache($cache['key'],$cache['options'])) { ?>
    <? $subs = explode('/', $sub);
    $this->params['breadcrumbs'][] = ['label'=>Yii::t('app', $subs[0]), 'url'=>[$subs[1]]];
    $this->params['breadcrumbs'][] = $training->title; ?>
<div class="container">
    <div class="section section_no-p section section_bg-3">
        <div class="section__title section__title_left">
            <h1><?=$training->title?></h1>
        </div>
        <div class="section__text section__text_slim section__text_exam">
            <?=$training->text?>
        </div>
<?//= $this->render('_tutors',['tutors'=>$tutors]);?>
        <a href="#" class="course-sidebar__btn btn btn_green btn_b-dark-green btnzzztype" data-id="Site_teachers_CELT-<? echo $training->id==7?"C":"P"?>"><?= Yii::t('app', 'Записатись');?></a>
    </div>
</div>
<?= $form;?>
<?php
$this->endCache();
}
if ($this->beginCache('trainings_'.Yii::$app->language,$cache['options'])) {
    echo '<div style="display:none;"></div>';
    $this->endCache();
}
?>
