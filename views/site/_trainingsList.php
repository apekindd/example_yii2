<?php
use yii\helpers\Url;
?>
<div class="container container_courses-block">
    <div class="courses-block">
        <div class="courses-block__col courses-block__col_large"><a href="<?=Url::to(['site/trainings', 'symbol'=> 'delta'])?>" class="courses-block__item courses-block__item_no-ml courses-block__item_large courses-block__item_blue"><span class="courses-block__title">Курсы<span class="courses-block__bold">Delta</span></span></a><a href="<?=Url::to(['site/trainings', 'symbol'=> 'celta'])?>" class="courses-block__item courses-block__item_grey"><span class="courses-block__title">Курсы<span class="courses-block__bold">Celta</span></span></a><a href="<?=Url::to(['site/trainings', 'symbol'=> 'other'])?>" class="courses-block__item courses-block__item_no-ml courses-block__item_white"><span class="courses-block__title">Другие<span class="courses-block__bold">Курсы</span></span></a><a href="<?=Url::to(['site/trainings', 'symbol'=> 'modul'])?>" class="courses-block__item courses-block__item_large courses-block__item_green"><span class="courses-block__title">Модульные<span class="courses-block__bold">Курсы</span></span></a>
        </div>
        <div class="courses-block__col"><a href="<?=Url::to(['site/trainings', 'symbol'=> 'celt_c'])?>" class="courses-block__item courses-block__item_full-h courses-block__item_light-blue"><span class="courses-block__title">Курсы<span class="courses-block__bold">Celt-C/</span><span class="courses-block__bold">Celt-P</span></span></a>
        </div>
    </div>
</div>