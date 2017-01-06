<?php
use yii\helpers\Url;
$this->title = $training->title;
?>
<?php if ($this->beginCache($cache['key'],$cache['options'])) { ?>
    <? $subs = explode('/', $sub);
    $this->params['breadcrumbs'][] = ['label'=>Yii::t('app', $subs[0]), 'url'=>[$subs[1]]];
    $this->params['breadcrumbs'][] = $training->title; ?>
<div class="container">
    <div class="section section_no-p section section_bg-2">
        <div class="section__title section__title_left">
            <h1><?=$training->title?></h1>
            <? if($training->img):?>
                <img src="<?=Url::to('@web/images/'.$training->img);?>" alt="<?=$training->imageAlt?>" title="<?=$training->imageTitle?>" class="section__title-logo" role="presentation"/>
            <? else: ?><img src="<?=Url::to('@web/img/cambridge-logo.jpg');?>" alt="" class="course-block__logo" role="presentation"/>
            <? endif;?>
        </div>
        <div class="section__text section__text_slim section__text_exam">
            <?=$training->text?>
<? foreach ($trainingModuls as $item):?>
            <br><span class="section__text section__text_bold"><span class="section__text section__text_green"><?=$item->title?> </span><?=$item->anons?> </span><?=$item->text?> <br>
<? endforeach;?>
        </div>
    </div>
    <?= $this->render('_tutors',['tutors'=>$tutors]);?>
    <br><br>
    <a href="#" class="btn btn btn_green btn_b-dark-green btnz">Записаться</a>
    <br><br>
</div>
    <?=$form?>
    <?php
    $this->endCache();
}
if ($this->beginCache('trainings_'.Yii::$app->language,$cache['options'])) {
    echo '<div style="display:none;"></div>';
    $this->endCache();
}
?>
