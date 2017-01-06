<?php
use yii\helpers\Url;

$this->title = $course->title;

$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Курси'), 'url'=>['courses']];
$this->params['breadcrumbs'][] = $course->title;
?>
<?php if ($this->beginCache($cache['key'],$cache['options'])) { ?>
<?= $this->render('_offers',['offers'=>$offers]);?>
    <div class="container">
        <div class="course-header" style="background-image: url('<?=Url::to('@web/images/'.$course->backgroundimg);?>');">
            <div class="course-header__title-container">
                <div class="course-header__title"><?=$course->title?>
                </div>
                <div class="course-header__text"><?=$course->anons?>
                </div>
            </div>
        </div>
    </div>

<div class="container container_course-info">
    <div class="course-info course-info_violet">
        <div class="course-info__title">
            <h2><?=Yii::t('app', 'Переваги корпоративного навчання')?></h2>
        </div>
        <div class="course-benefit">
            <? $count = 0; foreach ($benefits as $item):?>
                <?if($count++<3):?>
                <div class="course-benefit__item">
                    <div class="course-benefit__title"><?=$item->title?>
                    </div>
                    <div class="course-benefit__descr"><?=$item->text?>
                    </div>
                </div><?if($count==3) echo "</div>";?>
                <?else:?>
                    <div class="course-info-list">
                        <div class="course-info-list__title"><?=$item->title?>
                        </div>
                        <?=$item->text?>
                    </div>
                <?endif;?>
            <? endforeach;?>
        <a name="ua"></a>
        <a href="#" data-type='corp' class="btn btn_yellow btn_b-grey other_btn2 btnz"><?=Yii::t('app', 'Записатися')?></a>
    </div>


    <div class="course-info course-info_grey">
        <div class="course-info__title">
            <h2><?=$cursUkraine->title?></h2>
        </div>
        <div class="course-info-list">
<!--            <div class="course-info-list__title">--><?//=Yii::t('app', 'Короткі мовні тренінги')?><!--:-->
<!--            </div>-->
            <?=$cursUkraine->anons?>
        </div><a href="#" data-type='ua' class="btn btn_green btn_b-grey other_btn2 btnz"><?=Yii::t('app', 'Записатися')?></a>
    </div>
</div>
    
<?= $this->render('_reviews',['reviews'=>$reviews]);?>
<?= $form;?>

<?php
$this->endCache();
}
if ($this->beginCache('courses_'.Yii::$app->language,$cache['options'])) {
    echo '<div style="display:none;"></div>';
    $this->endCache();
}
?>