<?php
use yii\helpers\Url;
$this->title = $offer->title;

$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Акції'), 'url'=>['offers']];
$this->params['breadcrumbs'][] = $offer->title;
?>
<?php /*if ($this->beginCache($cache['key'],$cache['options'])) { ?>

<h1><?=$offer->title?></h1>
<img src="<?=Url::to('@web/images/'.$offer->img);?>" alt="" style="width: 100px; height: 100px;">
<p><?=$offer->text?></p>

<h2>Читайте также</a></h2>
<? foreach ($offers as $item):?>
    <div class="news_one">
        <h3><a href="/offers/<?=$item['id']?>"><?=$item['title']?></a></h3>
        <a href="/offers/<?=$item['id']?>"><img src="<? echo $item['img']==""?'/images/temp.jpg':$item['img'];?>" alt="" style="width: 100px; height: 100px;"></a>
        <p><?=date("d.m.Y",$item['date'])?></p>
    </div>
<?endforeach;?>

    <?php
    $this->endCache();
}*/
?>
<?php if ($this->beginCache($cache['key'],$cache['options'])) { ?>
    <div class="container">
        <div class="post-col">
            <div class="section section_no-p">
                <div class="section__title section__title_left">
                    <h1><?=$offer->title?></h1>
                </div>
                <div class="post">
                    <div class="post__text">
                        <?=$offer->text?>
                    </div>
                    <?if(!empty($offer->img)):?>
                        <div class="post__slider">
                            <? foreach ($offer->img as $item): ?>
                                <div class="post__slider-item">
                                    <img src="<?=Url::to('@web/images/'.$item->img);?>" alt="<?=$item->alt?>" title="<?=$item->title?>" class="post__slider-picture" role="presentation"/>
                                </div>
                            <?endforeach;?>
                        </div>
                    <?endif;?>
                    <div class="post__social">
                        <a href="#" class="post__social-link post__social-link_vk"></a>
                        <a href="#" class="post__social-link post__social-link_twitter"></a>
                        <a href="#" class="post__social-link post__social-link_fb"></a>
                    </div>
                    <?php if($link != ''){?>
                    <a href="<?= $link ?>" class="btn btn btn_green btn_b-dark-green"><?= Yii::t('app','Записатися') ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="post-sidebar-col">
            <div class="post-sidebar">
                <div class="post-sidebar__title"><?= Yii::t('app', 'Читайте також');?>
                </div>
            </div>
            <ul class="news news_side">
                <? foreach ($offers as $item):?>
                    <li class="news__item">
                        <div class="news__picture">
                            <a href="<?=Url::to(['site/offers', 'symbol'=> $item->id])?>">
                                <img src="<?echo $item->img==""?'/images/temp.jpg':Url::to('@web/images/'.$item->img) ?>" alt="<?=$item->imageAlt?>" title="<?=$item->imageTitle?>">
                            </a>
                            <div class="news__date"><span class='news__date_day'> <?=date("d",$item['date'])?> </span> <?=date("m/Y",$item['date'])?>
                            </div>
                        </div>
                        <div class="news__title"><?=$item['title']?>
                        </div><a href="<?= Url::to(['site/offers','symbol'=>$item['id']]) ?>" class="news__link"><?= Yii::t('app', 'Докладніше');?>...</a>
                    </li>
                <?endforeach;?>
            </ul>
        </div>
    </div>
    <?php
    $this->endCache();
}
