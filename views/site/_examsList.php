<?php
use yii\helpers\Url;
?>
<div class="container container_courses-block">
    <div class="courses-block">
        <div class="courses-block__col courses-block__col_large"><a href="<?=Url::to(['site/exams', 'symbol'=> 'teens'])?>" class="courses-block__item courses-block__item_no-ml courses-block__item_large courses-block__item_blue exams-block__item"><span class="courses-block__title exams-block__title">Экзамены для<span class="courses-block__bold">Подростков</span></span></a><a href="<?=Url::to(['site/exams', 'symbol'=> 'adults'])?>" class="courses-block__item courses-block__item_grey exams-block__item"><span class="courses-block__title exams-block__title">Экзамены для<span class="courses-block__bold">Взрослых</span></span></a><a href="<?=Url::to(['site/exams', 'symbol'=> 'teachers'])?>" class="courses-block__item courses-block__item_no-ml courses-block__item_white exams-block__item"><span class="courses-block__title exams-block__title">Экзамены для<span class="courses-block__bold">Учителей</span></span></a><a href="<?=Url::to(['site/exams', 'symbol'=> 'professionals'])?>" class="courses-block__item courses-block__item_large courses-block__item_green exams-block__item"><span class="courses-block__title exams-block__title">Экзамены для<span class="courses-block__bold">Профессионалов</span></span></a>
        </div>
        <div class="courses-block__col"><a href="<?=Url::to(['site/exams', 'symbol'=> 'children'])?>" class="courses-block__item courses-block__item_full-h courses-block__item_light-blue exams-block__item"><span class="courses-block__title exams-block__title">Экзамены для<span class="courses-block__bold">Детей</span></span></a>
        </div>
    </div>
</div>