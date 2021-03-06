<?php
use yii\helpers\Url;
$this->title = $exam->title;

$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Іспити'), 'url'=>['exams']];
$this->params['breadcrumbs'][] = $exam->title;
?>
<?php if ($this->beginCache($cache['key'],$cache['options'])) { ?>
    <div class="container">
        <div class="section section_no-p section section_bg">
            <div class="section__title section__title_left">
                <h1><?=$exam->title?></h1>
                <? if($exam->img):?>
                    <img src="<?=Url::to('@web/images/'.$exam->img);?>" alt="<?=$exam->imageAlt?>" title="<?=$exam->imageTitle?>" class="section__title-logo" role="presentation"/>
                <? else: ?><img src="<?=Url::to('@web/img/cambridge-logo.jpg');?>" alt="" class="course-block__logo" role="presentation"/>
                <? endif;?>
            </div>
            <div class="section__text section__text_slim section__text_exam">
                <?=$exam->anons?>
            </div>
            <?
            if(isset($exams)) echo $this->render('_exams',['exams'=>$exams,'form'=>$form,'examsAll'=>$examsAll]);
            ?>
        </div>
    </div>
    <?php
    $this->endCache();
}
?>