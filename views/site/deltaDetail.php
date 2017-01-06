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
        <?if($training->parent_id==9):?>
            <?php
            $data='';
            if($training->id  == 10){
                $data = "data-type='one_day'";
            }elseif($training->id  == 11){
                $data = "data-type='territory'";
            }
            ?>
            <a href="#" <?= $data?> class="course-sidebar__btn btn btn_green btn_b-dark-green btnz other_btn"><?= Yii::t('app', 'Записатись');?></a>

        <?endif;?>
<?//= $this->render('_tutors',['tutors'=>$tutors]);?>
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
