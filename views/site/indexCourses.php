<?php
use yii\helpers\Url;
$this->title = Yii::t('app','Курси');

$this->params['breadcrumbs'][] = $this->title;
$courseColor = [
"pink",
"green",
"blue",
"grey"
];
$buttonsColor = [
"green",
"blue",
"pink",
"purple"
];
function getStyle($n,$arr){
if($n>=count($arr)) return $arr[count($arr)-1];
return $arr[$n];
}
?>


<?= $this->render('_offers',['offers'=>$offers]);?>

<div class="container">
    <div class="course-header course-header_main" style="background-image: url('<?=Url::to('@web/images/'.$course->backgroundimg);?>');">
        <div class="course-header__title-container">
            <div class="course-header__title"><?=$course->anons?>
            </div>
            <div class="course-header__text"><?=$course->text?>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="course-type">
        <div class="course-type__row">
            <? $c=0;foreach ($courses as $item):?>
                <?if($c<=1):?>
                    <div class="course-type__item course-type__item_<?=getStyle($c,$courseColor)?>">
                        <div class="course-type__title"><?=$item->title?></div>
                        <div class="course-type__text"><?=$item->anons?></div>
                        <a href="<?=Url::to(['site/courses', 'symbol'=> $item->symbol])?>" class="course-type__btn btn btn_white btn_b-<?=getStyle($c,$buttonsColor)?>"><?=Yii::t('app', 'Докладніше')?></a>
                    </div>
                <?else:?>
                    <?echo $c==2?"</div>":"";?>
                    <div class="course-type__row">
                        <div class="course-type__item course-type__item_<?=getStyle($c,$courseColor)?> course-type__item_full-w">
                            <div class="course-type__title"><?=$item->title?>
                            </div>
                            <div class="course-type__text"><?=$item->anons?>
                            </div>
                            <a href="<?=Url::to(['site/courses', 'symbol'=> $item->symbol])?>" class="course-type__btn btn btn_white btn_b-<?=getStyle($c,$buttonsColor)?>"><?=Yii::t('app', 'Докладніше')?></a>
                        </div>
                    </div>
                <?endif;$c++;?>
            <? endforeach;?>
        </div>
    </div>
</div>
