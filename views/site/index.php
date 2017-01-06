<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$lang = Yii::$app->language == 'ua' ? '' : "/".Yii::$app->language;
?>
<?php if ($this->beginCache($cache['key'],$cache['options'])) { ?>
    <div class="container">
        <ul class="breadcrumbs">
        </ul>
        <div class="courses">
            <a href="<?=$lang.$mainpage[0]['link']?>" class="courses__item courses__item_large">
                <img src="/img/courses-adults.png" alt="" class="courses__item-img" role="presentation"/>
                <span class="courses__item-title courses__item-title_white" ><?=$mainpage[0]['title']?></span>
            </a>
            <a href="<?=$lang.$mainpage[4]['link']?>" class="courses__item courses__item_green courses__item_no-img courses__item_text-right courses__item_mod-1"><?=$mainpage[4]['title']?></a>
            <a href="<?=$lang.$mainpage[1]['link']?>" class="courses__item courses__item_text-right courses__item_mod-1">
                <img src="/img/courses-kids.png" alt="" class="courses__item-img" role="presentation"/>
                <span class="courses__item-title"><?=$mainpage[1]['title']?></span>
            </a>
            <a href="<?=$lang.$mainpage[3]['link']?>" class="courses__item courses__item_mod-2">
                <img src="/img/courses-teachers.png" alt="" class="courses__item-img" role="presentation"/>
                <span class="courses__item-title"><?=$mainpage[3]['title']?></span>
            </a>
            <a href="<?=$lang.$mainpage[2]['link']?>" class="courses__item courses__item_red courses__item_no-img courses__item_mod-2"><?=$mainpage[2]['title']?></a>
        </div>
        <?if(!empty($offers[0])):?>
        <ul class="sales">
            <li class="sales__item">
                <div class="sales__text"><?= Yii::t('app', 'Акція');?>
                </div><a href="<?=$lang?>/offers/<?=$offers[0]['id']?>" class="sales__title"><?=$offers[0]['title']?></a>
            </li>
            <?if(!empty($offers[1])):?>
            <li class="sales__item sales__item_light">
                <div class="sales__text"><?= Yii::t('app', 'Акція');?>
                </div><a href="<?=$lang?>/offers/<?=$offers[1]['id']?>" class="sales__title"><?=$offers[1]['title']?></a>
            </li>
            <?endif;?>
            <?if(!empty($offers[2])):?>
            <li class="sales__item sales__item_lighten">
                <div class="sales__text"><?= Yii::t('app', 'Акція');?>
                </div><a href="<?=$lang?>/offers/<?=$offers[2]['id']?>" class="sales__title"><?=$offers[2]['title']?></a>
            </li>
            <?endif;?>
        </ul>
        <?endif;?>
        <div class="section"><div class='section__title'> <?= Yii::t('app', 'Курси англійської мови');?> <span class='section__text-green'>International Language Centre</span> — <span class='section__text-slim'><br> <?= Yii::t('app', 'це Ваша унікальна можливість творити');?> <br> <?= Yii::t('app', 'власний успіх без мовного бар\'єру');?> <br> <?= Yii::t('app', 'і швидко досягти бажаного результату');?></span></div>
            <ul class="benefit">
                <li class="benefit__item">
                    <div class="benefit__logo">
                        <img src="/img/benefits-logo-1.png" alt="<?= Yii::t('app', 'Курси англійської мови');?>">
                    </div>
                    <div class="benefit__text"><?= Yii::t('app', 'Всі викладачі мають кембріджські дипломи та сертифікати про володіння сучасними методиками викладання.');?>
                    </div>
                </li>
                <li class="benefit__item">
                    <div class="benefit__logo">
                        <img src="/img/benefits-logo-2.png" alt="<?= Yii::t('app', 'Курси англійської мови');?>">
                    </div>
                    <div class="benefit__text"><?= Yii::t('app', 'Гнучкий набір, зручний розклад, групи не більше 12 осіб.');?>
                    </div>
                </li>
                <li class="benefit__item">
                    <div class="benefit__logo">
                        <img src="/img/benefits-logo-3.png" alt="<?= Yii::t('app', 'Курси англійської мови');?>">
                    </div>
                    <div class="benefit__text"><?= Yii::t('app', 'Навчальна програма розроблена відповідно до світового стандарту CEFR.');?>
                    </div>
                </li>
                <li class="benefit__item">
                    <div class="benefit__logo">
                        <img src="/img/benefits-logo-4.png" alt="<?= Yii::t('app', 'Курси англійської мови');?>">
                    </div>
                    <div class="benefit__text"><?= Yii::t('app', 'Ефективне використання автентичних підручників і онлайн ресурсів.');?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="map margin90">
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
    <?if(false):?>
    <div class="container">
        <div class="section">
            <div class="section__title">
                <h1>
                    <?= Yii::t('app', 'Новини школи');?>
                </h1>
            </div>
            <ul class="news">
                <? foreach ($news as $item):?>
                <li class="news__item">
                    <div class="news__picture">
                        <a href="<?=Url::to(['site/news', 'symbol'=> $item->id])?>">
                            <IMG src="<?echo $item->prev_img==""?'/images/temp.jpg':Url::to('@web/images/'.$item->prev_img) ?>" alt="<?=$item->imageAlt?>" title="<?=$item->imageTitle?>"></IMG>
                        </a>
                        <div class="news__date"><span class='news__date_day'> <?=date("d",$item->date)?> </span> <?=date("m/Y",$item->date)?>
                        </div>
                    </div>
                    <div class="news__title"><?=$item->title?>
                    </div><a href="<?=Url::to(['site/news', 'symbol'=> $item->id])?>" class="news__link"><?= Yii::t('app', 'Докладніше');?>...</a>
                </li>
                <?endforeach;?>
            </ul>
        </div>
    </div>
    <?endif;?>
<?php
    $this->endCache();
}
?>
