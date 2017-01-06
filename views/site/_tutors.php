<?php
use yii\helpers\Url;
?>
<? if ($tutors) :?>
    <? foreach ($tutors as $item):?>
        <div class="bio-vertical bio-vertical_no-m">
            <div class="bio-vertical__title">
                <?=$item->name?>
            </div>
            <div class="bio-vertical__info">
                <div class="bio-vertical__picture">
                    <img src="<?=Url::to('@web/images/'.$item->img);?>" alt="<?=$item->imageAlt?>" title="<?=$item->imageTitle?>">
                    <div class="bio-vertical__text">
                        <?=$item->text?>
                    </div>
                </div>
            </div>
        </div>
    <? endforeach;?>
<? endif;?>
