<?php $this->registerCss(".section__title{text-align: center;}") ?>
<div class="contact">
    <? foreach ($contacts as $item):?>
        <p></p>
        <div class="contact__item">
            <div class="contact__title contact__info"><?=$item->name?></div>
            <div class="contact__address contact__info"><?=nl2br($item->text)?></div>
            <div class="contact__address contact__subtitle"><?=$item->extra_name?></div>
            <div class="contact__address contact__info"><?=nl2br($item->tels)?></div>
            <div class="contact__address contact__info"><?=nl2br($item->email)?></div>
            <? if ($item->schedule) echo Yii::t('app', 'Час роботи:');?>
            <div class="contact__address contact__info"><?=nl2br($item->schedule)?></div>
            <div class="contact__btn-container"><a  data-name="<?=$item->name?>" data-lat="<?=$item->lat?>" data-lng="<?=$item->lng?>" class="show-item btn btn_green btn_b-green btn_t-white"><?=Yii::t('app', 'show_on_map');?></a>
            </div>
        </div>
    <? endforeach;?>
</div>
<?php //Кажется что эти 2 дива не нужны, но это не так - нужны!?>
</div>
</div>
<div class="map">
    <div class="map__container">
        <div id="map">

        </div>
    </div>
    <div class="map__text-container">
        <div class="map__title"><?=Yii::t('app','where_are_we')?>
        </div>
        <div class="map__text"><?=Yii::t('app','you_can_choose')?>
        </div>
    </div>
</div>
<?php //Кажется что эти 2 дива не нужны, но это не так - нужны!?>
<?php $this->registerJsFile("/libs/jquery.min.js"); ?>
<?php $this->registerJsFile("/js/map.js"); ?>
<script src='https://maps.googleapis.com/maps/api/js?key=<?=Yii::$app->params['gooleMapApiKey']?>&libraries=places&callback=initIlcMap' defer></script>
<div>
    <div>
