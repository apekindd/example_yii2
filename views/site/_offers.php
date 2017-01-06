<?
use yii\helpers\Url;
$js = <<<JS
//show offers when they are completely load
$(document).ready(function(){
    $('#offers_inner').show();
});
JS;
$this->registerJs($js);
?>
<? if ($offers):?>
    <div class="sales-slider" id="sales_id" style="min-height: 70px">
        <div class="sales-slider__container container">
            <div class="sales-slider__content" id="offers_inner" style="display:none;">
        <? foreach ($offers as $item):?>
                <a href="/offers/<?=$item['id']?>">

                    <div class="sales-slider__item">
                        <div class="sales-slider__title">
                            <?= Yii::t('app', 'Акція');?>
                        </div>
                        <div class="sales-slider__link">
                            <?=$item['title']?>
                        </div>
                    </div>
                </a>
        <?endforeach;?>
            </div>
        </div>
    </div>
<? endif; ?>