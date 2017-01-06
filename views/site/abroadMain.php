<?
use yii\helpers\Url;
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
<div class="container">
    <div class="course-header course-header_adults" style="background-image: url('<?=Url::to('@web/images/'.$abroadMain->image);?>');">
        <div class="course-header__title-container">
            <div class="course-header__title"><?=$abroadMain->title?>
            </div>
            <div class="course-header__text"><?=$abroadMain->anons?>
            </div>
        </div>
    </div>
</div>

<div class="container" id="blocksOfCourses">
    <div class="course-type">
        <div class="course-type__row">
            <? $c=0;foreach ($abroads as $item): if($item->is_main==1) continue;?>
                <?if($c<=1):?>
                    <div class="course-type__item course-type__item_<?=getStyle($c,$courseColor)?>">
                        <div class="course-type__title"><?=$item->title?></div>
                        <div class="course-type__text"><?=$item->anons?></div>
                        <?if($item->symbol != ""){?>
                            <a href="<?=Url::to(['site/abroad', 'symbol'=> $item->symbol])?>" class="course-type__btn btn btn_white btn_b-<?=getStyle($c,$buttonsColor)?>"><?=Yii::t('app', 'Докладніше')?></a>
                        <?}elseif($item->link != ""){?>
                            <a href="<?=$item->link?>" class="course-type__btn btn btn_white btn_b-<?=getStyle($c,$buttonsColor)?>"><?=Yii::t('app', 'Докладніше')?></a>
                        <?}?>
                    </div>
                <?else:?>
                    <?echo $c==2?"</div>":"";?>
                    <div class="course-type__row">
                        <div class="course-type__item course-type__item_<?=getStyle($c,$courseColor)?> course-type__item_full-w">
                            <div class="course-type__title"><?=$item->title?>
                            </div>
                            <div class="course-type__text"><?=$item->anons?>
                            </div>
                            <?if($item->symbol != ""){?>
                                <a href="<?=Url::to(['site/abroad', 'symbol'=> $item->symbol])?>" class="course-type__btn btn btn_white btn_b-<?=getStyle($c,$buttonsColor)?>"><?=Yii::t('app', 'Докладніше')?></a>
                            <?}elseif($item->link != ""){?>
                                <a href="<?=$item->link?>" class="course-type__btn btn btn_white btn_b-<?=getStyle($c,$buttonsColor)?>"><?=Yii::t('app', 'Докладніше')?></a>
                            <?}?>
                        </div>
                    </div>
                <?endif;$c++;?>
            <? endforeach;?>
        </div>
    </div>
</div>
