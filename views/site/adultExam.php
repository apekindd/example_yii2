<?php
use yii\helpers\Url;
$this->title = $course->title;

$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Курси'), 'url'=>['courses']];
$this->params['breadcrumbs'][] = $course->title;

function getLink($n){
    $arr = ['ielts','esol'];
    if($n>count($arr)-1) return "none";
    return $arr[$n];
}
?>

<?php if ($this->beginCache($cache['key'],$cache['options'])) { ?>
<?//= $this->render('_offers',['offers'=>$offers]);?>
<div class="container">
    <div class="section section_no-p section section_bg">
        <div class="section__title section__title_left">
            <h1><?=$course->title?></h1>
        </div>
        <div class="section__text section__text_slim section__text_exam">
            <?=$course->text?>
        </div>
        <? $c=0; foreach ($courses as $item):?>
            <a name="<?=getLink($c)?>"></a>
            <?if($c%2===0):?>
                <?if($c++>1):?>
                    <div class="container">
                    <div class="section section_no-p section section_bg">
                <?endif;?>
                <div class="section__title section__title_left">
                    <h2><?=$item->title?></h2>
                </div>
                <div class="section__text section__text_slim section__text_exam"><?=$item->anons?>
                </div>
                <?if($item->show_detail === 1):?>
                    <a href="<?=Url::to(['site/courses', 'symbol'=> $item->symbol])?>"><?=Yii::t('app', 'Докладніше')?></a>
                <?endif;?>
                <?= $this->render('_tables',['tables'=>$item->table]);?>
                <a href="#" class="btn btn_green btn_b-dark-green btnzzz" data-id="<?=$item->nameEsputnik?>"><?= Yii::t('app', 'Записатися');?></a>
                </div>
                </div>
            <?else:?>
                <div class="exam-block exam-block_teachers">
                    <div class="exam-block__container container">
                        <div class="exam-block__title">
                            <h2><?=$item->title?></h2>
                        </div>
                        <div class="exam-block__text"><?=$item->anons?>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <?= $this->render('_tables',['tables'=>$item->table]);?>
                    <a href="#" class="btn btn_green btn_b-dark-green btnzzz" data-id="<?=$item->nameEsputnik?>"><?= Yii::t('app', 'Записатися');?></a>
                </div>
            <?endif;?>
        <? endforeach;?>
<div class="exam-item-container">
<? $c=0;foreach ($levels as $item):?>
    <div class="exam-item">
        <div class="exam-item__container container">
            <div class="exam-item__title-container">
                <div class="exam-item__title">
                    <?=$item->title?>
                </div>
                <div class="exam-item__subtitle">
                    <?=$item->left_column?>
                </div>
                <div class="exam-item__title">
                    <?=$item->left_column_plus?>
                </div>
            </div>

            <div class="exam-item__period-container">
                <div class="exam-item__period"><?=$item->period?>
                </div>
            </div>
            <div class="exam-item__descr"><?=$item->text?>
            </div>
        </div>
    </div>
<? endforeach;?>
</div>
<?=$form?>
<?= $this->render('_reviews',['reviews'=>$reviews]);?>
    <?php
    $this->endCache();
}
if ($this->beginCache('courses_'.Yii::$app->language,$cache['options'])) {
    echo '<div style="display:none;"></div>';
    $this->endCache();
}
?>

