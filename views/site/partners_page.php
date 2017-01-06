<?php
$this->title = $static_page->title;
?>

<?php
if($sub){
    $subs = explode('/', $sub);
    $this->params['breadcrumbs'][] = ['label'=>Yii::t('app', $subs[0]), 'url'=>[$subs[1]]];
    $this->params['breadcrumbs'][] = $static_page->title;
}else{
    $this->params['breadcrumbs'][] = ['label'=>$static_page->title];
}
?>
<?php if ($this->beginCache($cache['key'],$cache['options'])) { ?>
    <div class="container">
        <div class="partners">
            <div class="partners__container container">
                <ul class="news news_page">
                    <?php foreach($partners as $item){?>
                    <li class="news__item">
                        <?php if($item->link){?>
                                <a target="_blank" href="<?=$item->link?>">
                                    <?php if($item->image){?>
                                        <img src="<?= \yii\helpers\Url::to('@web/images/'.$item->image) ?>" alt="<?=$item->imageAlt?>" title="<?=$item->imageTitle?>" class="partners__slider-picture" role="presentation"/>
                                    <?php }else{ ?>
                                        <?= $item->name ?>
                                    <?php } ?>
                                    </a>
                        <?php }else{ ?>
                            <?php if($item->image){?>
                                <img src="<?= \yii\helpers\Url::to('@web/images/'.$item->image) ?>" alt="<?=$item->imageAlt?>" title="<?=$item->imageTitle?>" class="partners__slider-picture" role="presentation"/>
                            <?php }else{ ?>
                                <?= $item->name ?>
                            <?php } ?>
                        <?php } ?>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

    <?php
    $this->endCache();
}
if ($this->beginCache('static_'.Yii::$app->language,$cache['options'])) {
    echo '<div style="display:none;"></div>';
    $this->endCache();
}
?>

