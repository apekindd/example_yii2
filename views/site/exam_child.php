<?php
use yii\helpers\Url;
$this->title = $course->title;

$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Курси'), 'url'=>['courses']];
$this->params['breadcrumbs'][] = $course->title;
?>
<?php if ($this->beginCache($cache['key'],$cache['options'])) { ?>
    <div class="container">
        <div class="section section_no-p section section_bg">
            <div class="section__title section__title_left">
                <h1><?=$course->title?></h1>
                <img src="<?=Url::to('@web/images/'.$course->img);?>" alt="<?=$course->imageAlt?>" title="<?=$course->imageTitle?>" class="section__title-logo" role="presentation"/>
            </div>
            <div class="section__text section__text_slim section__text_exam">
                <?=$course->text?>
            </div>
            <?= $this->render('_tables',['tables'=>$course->table]);?>
            <?
            if(isset($levels)) echo $this->render('_levels',['levels'=>$levels,'form'=>$form]);
            ?>
        </div>
    </div>
<?php
$this->endCache();
}
if ($this->beginCache('courses_'.Yii::$app->language,$cache['options'])) {
    echo '<div style="display:none;"></div>';
    $this->endCache();
}
?>
