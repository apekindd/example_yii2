<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
setlocale(LC_ALL, 'ru_RU.utf8');
$this->title = Yii::t('app','Пошук');
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="display: none">
    <div class="page">1</div>
</div>
<div class="container">
    <div class="section section_no-p">
        <div class="section__title section__title_left">
            <h1><?= Yii::t('app', 'Пошук');?></h1>
        </div>
        <div class="search-result">
            <div class="search">
                <form action="<?=Url::to(['site/search'])?>">
                    <input type="search" name="q" value="<?=Html::encode(trim($q))?>" class="search__input" id="sinp">
                    <button type="submit" class="search__button"></button>
                </form>
            </div>
            <?if(!empty($result)):?>
                <div class="search-result__stats"><?= Yii::t('app', 'По вашому запиту');?>
                    <span class="search-result__value"> <?=Html::encode(trim($q))?> </span><?= Yii::t('app', 'знайдено');?>
                    <span class="search-result__count"> <?=$countQuery?> </span><?= Yii::t('app', $mes);?>
                </div>
                <? foreach ($result as $item): ?>
                    <div class="search-result__item">
                        <div class="search-result__title"><a href="<?=$item['url']?>"><?=$item['title']?></a>
                        </div>
                        <div class="search-result__text"> <?=preg_replace("/($q)/ui","<span class=\"search-result__text search-result__text_bold\">\\0</span>",$item['text'])?></div>
                    </div>
                <? endforeach;?>
                <div id="ajax"></div>
            <?else:?>
                <div class="search-result__stats"><?= Yii::t('app', 'По вашому запиту');?><span class="search-result__value"> <?=Html::encode(trim($q))?> </span><?= Yii::t('app', 'нічого не знайдено');?>
                <?endif;?>
            </div>
        </div>
    </div>
</div>






