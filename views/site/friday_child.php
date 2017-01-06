<?php
use yii\helpers\Url;
$this->title = $course->title;

$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Курси'), 'url'=>['courses']];
$this->params['breadcrumbs'][] = $course->title;
?>
<?php if ($this->beginCache($cache['key'],$cache['options'])) { ?>

    <div class="container">
        <div class="section section_no-p section section_bg">
            <div class="section__title section__title_left">
                <h1><?=$course->title?></h1>
                <img src="<?=Url::to('@web/images/'.$course->img);?>" alt="<?=$course->imageAlt?>" title="<?=$course->imageTitle?>" class="section__title-logo" role="presentation"/>
            </div>
            <div class="section__text section__text_slim section__text_exam"><?=$course->text?></div>
            <?if($course->table):?>
                <div class="table-container">
                    <div class="table-tabs">
                        <?if(count($course->table)>1):?>
                            <ul class="table-tabs__links">
                                <?$c=0;foreach ($course->table as $item):?>
                                    <li class="table-tabs__item <?if($c++==0) echo "is-active";?>">
                                        <?=$item->title?>
                                    </li>
                                <?endforeach;?>
                            </ul>
                        <?endif;?>
                        <?$c=0;foreach ($course->table as $item):?>
                            <div class="table-tabs__content <?if($c++==0) echo "is-active";?>">
                                <div class="table-container">
                                    <?=$item->text?>
                                </div>
                                <a href="#" data-title="<?= $item->title ?>" class="exam-card__btn btn btn_green btn_b-dark-green btnz"><?=Yii::t('app', 'Записатися')?></a>
                            </div>
                        <?endforeach;?>
                    </div>
                </div>
            <?endif?>
        </div>
    </div>
    <?if(!empty($levels)):?>
    <div class="exam-item-container">
        <? $c=0;foreach ($levels as $item):?>
            <div class="exam-item">
                <div class="exam-item__container container">
                    <div class="exam-item__title-container">
                        <div class="exam-item__title">
                            <?=$item->title?>
                        </div>
                        <div class="exam-item__subtitle">
                            <?=$item->left_column?>
                        </div>
                        <div class="exam-item__title">
                            <?=$item->left_column_plus?>
                        </div>
                    </div>

                    <div class="exam-item__period-container">
                        <div class="exam-item__period"><?=$item->period?>
                        </div>
                    </div>
                    <div class="exam-item__descr"><?=$item->text?>
                    </div>
                </div>
            </div>
        <? endforeach;?>
    </div>
        <?endif;?>
    <?=$form?>

    <script>
        var ES_EXAM_PREPARATION = <?= ES_EXAM_PREPARATION ?>;
    </script>
    <?php
    $script =
        <<<JS
    $(document).on('click','.btnz' , function(){
    $('input[name="'+ES_EXAM_PREPARATION+'"]').val($(this).data('title'));
});
JS;
    $this->registerJs($script);
    ?>

    <?php
$this->endCache();
}
if ($this->beginCache('courses_'.Yii::$app->language,$cache['options'])) {
    echo '<div style="display:none;"></div>';
    $this->endCache();
}
?>
