<?php
use yii\helpers\Url;


if ($this->beginCache($cache['key'],$cache['options'])) {

if($training->id==8){
    $temp = $training;
    $training = $secondTraining;
    $secondTraining = $temp;
}
$this->title = $training->title.'/'.$secondTraining->title;?>

    <? $subs = explode('/', $sub);
    $this->params['breadcrumbs'][] = ['label'=>Yii::t('app', $subs[0]), 'url'=>[$subs[1]]];
    $this->params['breadcrumbs'][] = $training->title; ?>
<?= $this->render('_offers',['offers'=>$offers]);?>
    <div class="container container_celt">
        <div class="section__title">
            <h1><?=$training->title.'/'.$secondTraining->title;?></h1>
        </div>
        <div class="course-col course-col_celt">
            <div class="course-sidebar">
                <div class="course-sidebar__header">
                    <div class="course-sidebar__title">
                        <h2><?=$training->title?></h2>
                    </div>
                    <div class="course-sidebar__price">
                        <?= Yii::t('app', 'Вартість');?><span><?=$training->price?></span>
                    </div>
                </div>
                <div class="course-sidebar__descr course-sidebar__descr_height">
                    <?=$training->anons?>
                </div>
                <div class="course-sidebar__descr">
                    <?=$training->date?>
                </div>
                <?if($training->show_detail === 1):?>
                    <div class="course-sidebar__button course-sidebar__button_first">
                        <a href="<?=Url::to(['site/trainings', 'symbol'=> $training->symbol.'_detail'])?>" class="course-sidebar__btn btn btn_light-blue btn_b-dark-blue"><?= Yii::t('app', 'Докладніше');?></a>
                    </div>
                <?endif;?>
                <div class="course-sidebar__button">
                    <a href="#" class="course-sidebar__btn btn btn_green btn_b-dark-green btnzzztype" data-id="Site_teachers_CELT-C"><?= Yii::t('app', 'Записатись');?></a>
                </div>
            </div>
        </div>
        <div class="course-col course-col_celt">
            <div class="course-sidebar">
                <div class="course-sidebar__header">
                    <div class="course-sidebar__title">
                        <h2><?=$secondTraining->title?></h2>
                    </div>
                    <div class="course-sidebar__price">
                        <?= Yii::t('app', 'Вартість');?><span><?=$secondTraining->price?></span>
                    </div>
                </div>
                <div class="course-sidebar__descr course-sidebar__descr_height">
                    <?=$secondTraining->anons?>
                </div>
                <div class="course-sidebar__descr">
                    <?=$secondTraining->date?>
                </div>
                <?if($secondTraining->show_detail === 1):?>
                    <div class="course-sidebar__button course-sidebar__button_first">
                        <a href="<?=Url::to(['site/trainings', 'symbol'=> $secondTraining->symbol.'_detail'])?>" class="course-sidebar__btn btn btn_light-blue btn_b-dark-blue"><?= Yii::t('app', 'Докладніше');?></a>
                    </div>
                <?endif;?>
                <div class="course-sidebar__button">
                    <a href="#" class="course-sidebar__btn btn btn_green btn_b-dark-green btnzzztype" data-id="Site_teachers_CELT-P"><?= Yii::t('app', 'Записатись');?></a>
                </div>
            </div>
        </div>
    </div>
<?= $this->render('_reviews',['reviews'=>$reviews]);?>
<?= $this->render('_trainingsList');?>
<?= $form;?>
    <?php
    $this->endCache();
}
if ($this->beginCache('trainings_'.Yii::$app->language,$cache['options'])) {
    echo '<div style="display:none;"></div>';
    $this->endCache();
}
?>
