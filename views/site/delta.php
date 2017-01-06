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
    <div class="course-col course-col_full">
        <div class="course-block course-block_bg">
            <div class="course-block__title">
                <h1><?=$training->title?></h1>
                <? if($training->img):?>
                    <img src="<?=Url::to('@web/images/'.$training->img);?>" alt="<?=$training->imageAlt?>" title="<?=$training->imageTitle?>" class="section__title-logo" role="presentation"/>
                <? else: ?><img src="<?=Url::to('@web/img/cambridge-logo.jpg');?>" alt="" class="course-block__logo" role="presentation"/>
                <? endif;?>
            </div>
            <div class="course-block__descr">
                <?=$training->anons?>
            </div>

            <div class="course-block__date-list">
                <?=$training->date?>
            </div>
        </div>
    </div>

    <? foreach ($trainingModuls as $item):?>
        <div class="course-col course-col_sidebar-full">
            <div class="course-sidebar">
                <div class="course-sidebar__header">
                    <div class="course-sidebar__title">
                        <h2><?=$item->title?></h2>
                        <p><?=$item->anons?></p>
                    </div>
                    <div class="course-sidebar__price">
                        <?= Yii::t('app', 'Ціна');?><span><?=$item->price?> грн</span>
                    </div>
                </div>
                <div class="course-sidebar__descr">
                    <?=$item->rightcol?>
                </div>
                <div class="course-sidebar__button course-sidebar__button_first"><a href="<?=Url::to(['site/trainings', 'symbol'=> 'delta_detail'])?>" class="btn btn_light-blue btn_b-dark-blue"><?= Yii::t('app', 'Докладніше');?></a>
                </div>
                <div class="course-sidebar__button"><a href="#" class="btn btn_green btn_b-dark-green btnzzz"><?= Yii::t('app', 'Записатися');?></a>
                </div>
            </div>
        </div>
    <? endforeach;?>
</div>
<?= $this->render('_trainingsList');?>
<?= $this->render('_reviews',['reviews'=>$reviews]);?>
    <?=$form?>
    <?php
    $this->endCache();
}
if ($this->beginCache('trainings_'.Yii::$app->language,$cache['options'])) {
    echo '<div style="display:none;"></div>';
    $this->endCache();
}
?>

