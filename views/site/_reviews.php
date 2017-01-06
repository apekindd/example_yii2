
<?
use yii\helpers\Url;
?>
<? if ($reviews):?>
    <div class="reviews">
        <div class="reviews__container container">
            <div class="reviews__section section">
                <div class="reviews__title section__title">
                    <h2><?= Yii::t('app', 'Відгуки');?></h2>
                </div>
                <div class="reviews__slider">
            <? foreach ($reviews as $item): ?>

            <? if ($item->video):?>
                    <!--<div class="review_video">
                        <iframe width="560" height="315" src="<?=$item->video?>" frameborder="0" allowfullscreen></iframe>
                    </div>-->
            <? else: ?>
                    <div class="reviews__slider-item">
                        <img src="<?=Url::to('@web/images/'.$item->img);?>" alt="" class="reviews__slider-picture" role="presentation"/>
                        <div class="reviews__slider-title">
                            <?=$item->name?>
                        </div>
                        <div class="reviews__slider-text" style="display:none">
                            <?=$item->text?>
                        </div>
                    </div>
        <? endif; ?>
    <?endforeach;?>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-container" id="poprev">

        <? if ($item->video):?>
            <!--<div class="review_video">
                    <iframe width="560" height="315" src="<?=$item->video?>" frameborder="0" allowfullscreen></iframe>
                </div>-->
        <? else: ?>
            <div class="popup" >
                <div class="popup__title">

                </div>
                <div class="popup__text">

                </div>
                <div class="popup__close">
                </div>
            </div>
        <? endif; ?>

    </div>
<? endif; ?>

