<?php
use yii\helpers\Url;
$this->title = $training->title;
?>
<? if ($this->beginCache($cache['key'],$cache['options'])) { ?>
    <? $this->params['breadcrumbs'][] = ['label'=>$training->title]; ?>
    <?= $this->render('_offers', ['offers' => $offers]); ?>

    <div class="container">
        <div class="course-header course-header_teachers">
            <div class="course-header__title-container">
                <div class="course-header__title"><?= $training->title; ?></div>
                <div class="course-header__text"><?= $training->anons; ?></div>
                <img src="<?=Url::to('@web/img/cambridge-logo.jpg');?>" alt="" class="course-header__picture" role="presentation"/>
            </div>
        </div>
    </div>
    <?= $this->render('_trainingsList');?>
    <?= $this->render('_reviews', ['reviews' => $reviews]); ?>
    <?
    $this->endCache();
}
?>
