<?php
use yii\helpers\Url;
$this->title = $course->title;

$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Курси'), 'url'=>['courses']];
$this->params['breadcrumbs'][] = $course->title;
?>
<?php if ($this->beginCache($cache['key'],$cache['options'])) { ?>
    <div class="container">
        <div class="course-header course-header_holidays" style="background-image: url('<?=Url::to('@web/images/'.$course->backgroundimg);?>');">
            <div class="course-header__title-container">
                <div class="course-header__title"><?=$course->title?>
                </div>
                <div class="course-header__text"><?=$course->anons?>
                </div>
            </div>
        </div>
        <div class="course-type">
            <div class="course-type__row">
            <? $c=0;foreach ($courses as $item):?>
                <div class="course-type__item <?echo $c%2==0?"course-type__item_pink":"course-type__item_green";?>">
                    <div class="course-type__title">
                        <?=$item->title?>
                        <div class="course-type__subtitle"><?=$item->subtitle?>
                        </div>
                    </div>
                    <div class="course-type__text">
                        <?=$item->anons?>
                    </div>
                    <a href="<?=Url::to(['site/courses', 'symbol'=> $item->symbol])?>" class="course-type__btn btn btn_white <?echo $c++%2==0?"btn_b-green":"btn_b-blue";?>"><?= Yii::t('app', 'Докладніше');?></a>
                    <div class="course-type__price">
                        <?= Yii::t('app', 'Ціна');?><span><?=$item->price?></span>
                    </div>
                </div>
            <? endforeach;?>
            </div>
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