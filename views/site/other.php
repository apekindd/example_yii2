<?php
use yii\helpers\Url;

$this->title = Yii::t('app', 'Інші тренінги');
function getLink($n){
    $arr = ['one','territory_link'];
    if($n>count($arr)-1) return "none";
    return $arr[$n];
}
?>
<?php if ($this->beginCache($cache['key'],$cache['options'])) { ?>
    <? $subs = explode('/', $sub);
    $this->params['breadcrumbs'][] = ['label'=>Yii::t('app', $subs[0]), 'url'=>[$subs[1]]];
    $this->params['breadcrumbs'][] = $training->title; ?>
<?= $this->render('_offers',['offers'=>$offers]);?>
<? $c=0;foreach ($trainingsForOtherPage as $item):?>
        <div class="container"><div id="<?=getLink($c++)?>"></div>
            <div class="course-col">
                <div class="course-block course-block_celta">
                    <div class="course-block__title">
                        <h1><?=$item->title?></h1>
                        <? if($training->img):?>
                            <img src="<?=Url::to('@web/images/'.$training->img);?>" alt="<?=$training->imageAlt?>" title="<?=$training->imageTitle?>" class="section__title-logo" role="presentation"/>
                        <? else: ?><img src="<?=Url::to('@web/img/cambridge-logo.jpg');?>" alt="" class="course-block__logo" role="presentation"/>
                        <? endif;?>
                    </div>
                    <div class="course-block__descr">
                        <?=$item->anons?>
                    </div>

                    <div class="course-block__date-list">
                        <?=$item->date?>
                    </div>
                </div>
            </div>
            <div class="course-col course-col_sidebar">
                <div class="course-sidebar">
                    <div class="course-sidebar__header">
                        <div class="course-sidebar__title">
                            <h2><?= Yii::t('app', 'Для кого цей курс');?></h2>
                        </div>
                        <div class="course-sidebar__price">
                            <?= Yii::t('app', 'Вартість');?><span><?=$item->price?> <?= Yii::t('app', 'грн');?></span>
                        </div>
                    </div>
                    <div class="course-sidebar__descr">
                        <?=$item->rightcol?>
                    </div>
                    <div class="course-sidebar__descr">
                        <?= Yii::t('app', 'Діє система знижок!');?>
                    </div>
                    <?if($item->show_detail === 1):?>
                        <div class="course-sidebar__button course-sidebar__button_first">
                            <a href="<?=Url::to(['site/trainings', 'symbol'=> $item->symbol])?>" class="course-sidebar__btn btn btn_light-blue btn_b-dark-blue"><?= Yii::t('app', 'Докладніше');?></a>
                        </div>
                    <?endif;?>
                    <div class="course-sidebar__button">
                        <?php
                        $data='';
                        if($item->id  == 10){
                            $data = "data-type='one_day'";
                        }elseif($item->id  == 11){
                            $data = "data-type='territory'";
                        }
                        ?>
                        <a href="#" <?= $data?> class="course-sidebar__btn btn btn_green btn_b-dark-green btnz other_btn"><?= Yii::t('app', 'Записатись');?></a>
                    </div>
                </div>
            </div>
        </div>
    <hr>

<? endforeach;?>
    <?= $form ?>
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