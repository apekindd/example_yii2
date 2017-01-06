<?php
use yii\helpers\Url;
$this->title = Yii::t('app', Yii::t('app', 'Новини школи'));

$this->params['breadcrumbs'][] = $this->title;
?>
<?php if ($this->beginCache($cache['key'],$cache['options'])) { ?>
<div class="container">
<div class="section section_no-p">
    <div class="section__title section__title_no-m">
        <h1><?= Yii::t('app', 'Новини школи');?></h1>
    </div>
    <ul class="news news_page">
<? foreach ($news as $item):?> 
    <li class="news__item">
        <div class="news__picture">
            <a href="<?=Url::to(['site/news', 'symbol'=> $item->id])?>">
                <IMG src="<?echo $item->prev_img==""?'/images/temp.jpg':Url::to('@web/images/'.$item->prev_img) ?>" alt="<?=$item->imageAlt?>" title="<?=$item->imageTitle?>">
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
    <?php
    $this->endCache();
}
?>
