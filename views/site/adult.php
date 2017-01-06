<?php
use yii\helpers\Url;
$this->title = $course->title;

$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Курси'), 'url'=>['courses']];
$this->params['breadcrumbs'][] = $course->title;

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

<?php if ($this->beginCache($cache['key'],$cache['options'])) { ?>
    <?= $this->render('_offers',['offers'=>$offers]);?>
    <a href="#" id="btn2" class="btn btn_green btn_b-dark-green" style="display: none; position: fixed; z-index:10000; top:600px"><?= Yii::t('app', 'Записатися');?></a>

    <div class="container">
        <div class="course-header course-header_adults" style="background-image: url('<?=Url::to('@web/images/'.$course->backgroundimg);?>');">
            <div class="course-header__title-container">
                <div class="course-header__title"><?=$course->title?>
                </div>
                <div class="course-header__text"><?=$course->anons?>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="blocksOfCourses">
        <div class="course-type">
            <div class="course-type__row">
                <? $c=0;foreach ($courses as $item):?>
                    <?if($c<=1):?>
                        <div class="course-type__item course-type__item_<?=getStyle($c,$courseColor)?>">
                            <div class="course-type__title"><?=$item->title?></div>
                            <div class="course-type__text"><?=$item->anons?></div>
                            <?if($item->show_detail === 1):?>
                                <a href="<?=Url::to(['site/courses', 'symbol'=> $item->symbol])?>" class="course-type__btn btn btn_white btn_b-<?=getStyle($c,$buttonsColor)?>"><?=Yii::t('app', 'Докладніше')?></a>
                            <?endif;?>
                        </div>
                    <?else:?>
                        <?echo $c==2?"</div>":"";?>
                        <div class="course-type__row">
                            <div class="course-type__item course-type__item_<?=getStyle($c,$courseColor)?> course-type__item_full-w">
                                <div class="course-type__title"><?=$item->title?>
                                </div>
                                <div class="course-type__text"><?=$item->anons?>
                                </div>
                                <?if($item->show_detail === 1):?>
                                    <a href="<?=Url::to(['site/courses', 'symbol'=> $item->symbol])?>" class="course-type__btn btn btn_white btn_b-<?=getStyle($c,$buttonsColor)?>"><?=Yii::t('app', 'Докладніше')?></a>
                                <?endif;?>
                            </div>
                        </div>
                    <?endif;$c++;?>
                <? endforeach;?>
            </div>
        </div>
    </div>
    <div class="map">
        <div class="map__container">
            <div id="map">
                <script src='https://maps.googleapis.com/maps/api/js?key=<?=Yii::$app->params['gooleMapApiKey']?>&libraries=places&callback=initMap' defer></script>
            </div>

        </div>
        <div class="map__text-container">
            <div class="map__title"><?=Yii::t('app', 'Де ми')?>
            </div>
            <div class="map__text"><?=Yii::t('app', 'Ви можете вибрати те, що вам зручно - ми завжди поруч')?>
            </div>
        </div>
    </div>
    
    <div class="container formStudy">
        <div class="section">
            <div class="section__title"><?=Yii::t('app', 'Форми навчання')?>
            </div>
            <ul class="learning-forms">
    <? foreach ($formstudy as $item):?>
                <li class="learning-forms__item">
                    <div class="learning-forms__title-container">
                        <div class="learning-forms__title"><?=$item->title?>
                        </div>
                    </div>
                </li>
    <? endforeach;?>
            </ul>
        </div>
    </div>

    <?= $this->render('_reviews',['reviews'=>$reviews]);?>
    

<!--    <h1>НАЧНИТЕ ИЗУЧАТЬ АНГЛИЙСКИЙ ЯЗЫК ВМЕСТЕ</h1>
    <?/* foreach ($begintest as $item):*/?>
        <div style="float:left;margin-right: 15px;">
            <h1><?/*=$item->step*/?></h1>
            <img src="<?/*=Url::to('@web/images/'.$item->img);*/?>" alt="" style="max-height: 400px;">
            <p><?/*=$item->title*/?></p>
        </div>
    <?/* endforeach;*/?><div style="clear: both;"></div>

    <h1>ТЕСТИРОВАНИЕ
        СОСТОИТ ИЗ 5 ПРОСТЫХ ШАГОВ</h1>
    <?/* foreach ($stepstest as $item):*/?>
        <div style="float:left;margin-right: 15px;width: 200px;height: 200px;">
            <h1><?/*=$item->step*/?></h1>
            <p style="font-weight: bold"><?/*=$item->title*/?></p>
            <p><?/*=$item->description*/?></p>
        </div>
    <?/* endforeach;*/?><div style="clear: both;"></div>
    <br><br>
    <h1>Курсы английского языка International Language Centre —
        это Ваша уникальная возможность творить собственный успех без языкового барьера
        и быстро достичь желаемого результата</h1>
    <?/* foreach ($opportunity as $item):*/?>
        <div style="float:left;margin-right: 15px;width: 250px;height: 200px;">
            <img src="<?/*=Url::to('@web/images/'.$item->img);*/?>" alt="" style="max-height: 400px;">
            <p><?/*=$item->title*/?></p>
        </div>
    --><?/* endforeach;*/?>

    <div style="clear: both;"></div><br><br><br><br>

    <?=$form?>
    
    <?php
    $this->endCache();
}
if ($this->beginCache('courses_'.Yii::$app->language,$cache['options'])) {
    echo '<div style="display:none;"></div>';
    $this->endCache();
}
?>