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
        <div class="course-block course-block_celta">
            <div class="course-block__title">
                <span><?=$training->title?></span>
                <? if($training->img):?>
                    <img src="<?=Url::to('@web/images/'.$training->img);?>" alt="<?=$training->imageAlt?>" title="<?=$training->imageTitle?>" class="section__title-logo" role="presentation"/>
                <? else: ?><img src="<?=Url::to('@web/img/cambridge-logo.jpg');?>" alt="" class="course-block__logo" role="presentation"/>
                <? endif;?>
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
             <div class="course-sidebar__button">
                 <a href="#" class="course-sidebar__btn btn btn_green btn_b-dark-green"><?= Yii::t('app', 'Записатись');?></a>
            </div>
        </div>
    </div>
<br><br>
<? foreach ($trainingModuls as $item):?>
    <div style="float:left;width:150px;">
        <h2 style="font-size:24px;"><?=$item->title?></h2>
        <?if($item->show_detail == 1):?>
            <a href="<?=Url::to(['site/trainings', 'symbol'=> $item->symbol])?>"><?= Yii::t('app', 'Докладніше');?></a>
        <?endif;?>
            <a href="#"><?= Yii::t('app', 'Записатися');?></a>
    </div>
<? endforeach;?>
</div>

<?= $this->render('_trainingsList');?>
<?= $this->render('_reviews',['reviews'=>$reviews]);?>
    <?php
    $this->endCache();
}
if ($this->beginCache('trainings_'.Yii::$app->language,$cache['options'])) {
    echo '<div style="display:none;"></div>';
    $this->endCache();
}
?>

