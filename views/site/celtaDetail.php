<?php
use yii\helpers\Url;
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
                <? if($training->img):?>
                    <img src="<?=Url::to('@web/images/'.$training->img);?>" alt="<?=$training->imageAlt?>" title="<?=$training->imageTitle?>" class="section__title-logo" role="presentation"/>
                <? else: ?><img src="<?=Url::to('@web/img/cambridge-logo.jpg');?>" alt="" class="course-block__logo" role="presentation"/>
                <? endif;?>
            </div>
            <div class="section__text section__text_slim section__text_exam">
                <?=$training->text?>
            </div>
            <? foreach ($trainingModuls as $item):?>
                <div class="section__title section__title_left">
                    <h2><?=$item->title?></h2>
                </div>
                <div class="section__text section__text_slim section__text_exam">
                    <?=$item->text?>
                </div>
            <? endforeach;?>
        <?//= $this->render('_tutors',['tutors'=>$tutors]);?>
        </div>        <a href="#" class="btn btn btn_green btn_b-dark-green"><?= Yii::t('app','Записатися') ?></a>
        <br><br>
    </div>
    <?php
    $this->endCache();
}
if ($this->beginCache('trainings_'.Yii::$app->language,$cache['options'])) {
    echo '<div style="display:none;"></div>';
    $this->endCache();
}
?>
