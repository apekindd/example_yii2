<?php
use yii\helpers\Url;
$this->title = $new->title;

$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Новини'), 'url'=>['news']];
$this->params['breadcrumbs'][] = $new->title;;
?>
<?php if ($this->beginCache($cache['key'],$cache['options'])) { ?>
<div class="container">
    <div class="post-col">
        <div class="section section_no-p">
            <div class="section__title section__title_left">
                <h1><?=$new->title?></h1>
            </div> 
            <div class="post">
                <div class="post__text">
                    <?=$new->text?>
                </div>
                <?if(!empty($new->img)):?>
                <div class="post__slider">
                    <? foreach ($new->img as $item): ?>
                        <div class="post__slider-item"><img src="<?=Url::to('@web/images/'.$item->img);?>" alt="<?=$item->alt?>" title="<?=$item->title?>" class="post__slider-picture" role="presentation"/>
                        </div>
                    <?endforeach;?>
                </div>
                <?endif;?>
                <div class="post__social"><a href="#" class="post__social-link post__social-link_vk"></a><a href="#" class="post__social-link post__social-link_twitter"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="post-sidebar-col">
        <div class="post-sidebar">
            <div class="post-sidebar__title"><?= Yii::t('app', 'Читайте також');?>
            </div>
        </div>
        <ul class="news news_side">
    <? foreach ($news as $item):?>
            <li class="news__item">
                <div class="news__picture">
                    <a href="<?=Url::to(['site/news', 'symbol'=> $item->id])?>">
                        <IMG src="<?echo $item->prev_img==""?'/images/temp.jpg':Url::to('@web/images/'.$item->prev_img) ?>" alt="<?=$item->imageAlt?>" title="<?=$item->imageTitle?>">
                    </a>
                    <div class="news__date"><span class='news__date_day'> <?=date("d",$item['date'])?> </span> <?=date("m/Y",$item['date'])?>
                    </div>
                </div>
                <div class="news__title"><?=$item['title']?>
                </div><a href="<?= Url::to(['site/news','symbol'=>$item['id']]) ?>" class="news__link"><?= Yii::t('app', 'Докладніше');?>...</a>
            </li>
    <?endforeach;?>
        </ul>
    </div>
</div>
<?php
$this->endCache();
}
