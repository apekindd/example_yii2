<? foreach ($levels as $item):?>
    <div class="exam-card">
        <div class="exam-card__title-container">
            <?=$item->left_column?>
        </div>
        <div class="exam-card__price-container"><?=Yii::t('app', 'Ціна')?>
            <div class="exam-card__price">
                <?=$item->price?>
            </div>
        </div>
        <div class="exam-card__text"><?=$item->text?>
        </div>
        <a href="#" data-title="<?= $item->title ?>" class="exam-card__btn btn btn_green btn_b-dark-green btnz"><?=Yii::t('app', 'Записатися')?></a>
    </div><br>
<? endforeach;?>
<?= $form ?>

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
