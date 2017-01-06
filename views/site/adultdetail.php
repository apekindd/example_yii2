<?php
use yii\helpers\Url;
$this->title = $course->title;

$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Курси'), 'url'=>['courses']];
$this->params['breadcrumbs'][] = $course->title;
?>

<?php if ($this->beginCache($cache['key'],$cache['options'])) { ?>
<?= $this->render('_offers',['offers'=>$offers]);?>
<div class="container">
    <div class="section section_no-p section section_bg-3">
        <div class="section__title section__title_left">
            <h1><?=$course->title?></h1>
        </div>
        <div class="section__text section__text_slim section__text_exam">
            <?=$course->text?>
        </div>
        <?= $this->render('_tables',['tables'=>$course->table]);?>
    <a href="#" id="btn2" class="btn btn_green btn_b-dark-green"><?= Yii::t('app', 'Записатися');?></a>
<? foreach ($courses as $item):?>
    <div style=" padding: 30px">
    <h2><?=$item->title?></h2>
    <p><?=$item->anons?></p>
    <?if($item->show_detail === 1):?>
        <a href="<?=Url::to(['site/courses', 'symbol'=> $item->symbol])?>">Подробнее</a>
    <?endif;?>
    </div><br>
<? endforeach;?>

<?
    if(isset($levels)) echo $this->render('_levels',['levels'=>$levels]);
?>

<?= $this->render('_reviews',['reviews'=>$reviews]);?>
        <?=$form?>
    <?php
    $this->endCache();
}
if ($this->beginCache('courses_'.Yii::$app->language,$cache['options'])) {
    echo '<div style="display:none;"></div>';
    $this->endCache();
}
?>
    </div>
</div>