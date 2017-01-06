<?php
$this->title = Yii::t('app', 'registration');
$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Іспити'), 'url'=>['site/exams']];
$this->params['breadcrumbs'][] = $this->title;
?>
<script>var exams = <?=$exams?>;</script>
<?= $this->render('../site/_offers',['offers'=>$offers]);?>
<div class="container">
    <div class="section section_pad-m">
        <div class="section__title"><?= Yii::t('app','exam_title_text') ?></div>
        <div class="section__text section__text_center"><?= Yii::t('app','exam_use_form') ?></div>
        <div class="exam" id="exam_container">
            <div class="exam__container exam__container_1">
                <div class="exam__title"><span>1/3 </span><?= Yii::t('app','exam_choose') ?></div>
                <div class="exam__content">
                    <div class="exam__content-col">
                        <div id="select-level" class="btn btn_yellow btn_b-grey"><?= Yii::t('app','exam_choose_level') ?></div>
                        <div class="exam__hint"><span>

                      <?=Yii::t('app','exam_detail')?></span>
                            <div class="exam__hint-content"><?=Yii::t('app','exam_prove')?>
                            </div>
                        </div>
                    </div>
                    <div class="exam__content-col">
                        <div id="select-exam" class="btn btn_yellow btn_b-grey"><?=Yii::t('app','exam_choose_exam')?></div>
                        <div class="exam__hint"><span><?=Yii::t('app','exam_detail')?></span>
                            <div class="exam__hint-content"><?=Yii::t('app','exam_register')?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="exam__container exam__container_1-1">
                <div class="exam__title"><span>2/3 </span><?=Yii::t('app','exam_chose_level_prove')?>
                </div>
                <div class="exam__content exam__content_m">
                    <div class="exam__content-col exam__content-col_text-left">
                        <select class="exam__select select-dropdown-yellow" id="exam_level">
                            <?php foreach($levels as $level){?>
                                <option value="<?= $level->id ?>"><?= $level->name ?></option>
                            <?php } ?>
                            <option value="idontknow"><?=Yii::t('app','exam_idont_know_level')?></option>
                        </select>
                    </div>
                    <div class="exam__content-col exam__content-col_text-left">
                        <button class="btn btn_green btn_b-green btn_t-white btn_next to-step-3" id="doyouknow"><?=Yii::t('app','exam_next')?>
                        </button>
                    </div>
                </div>
                <div class="btn btn_light-pink btn_b-light-pink btn_t-white btn_back to-step-1">
                    <?=Yii::t('app','exam_prev')?>
                </div>
            </div>
            <div class="exam__container exam__container_1-2">
                <div class="exam__title"><span>2/3 </span><?=Yii::t('app','exam_choose_exam_pass')?>
                </div>
                <div class="exam__content exam__content_l">
                    <div class="exam__control-container">
                        <label for="" class="exam__input-label"><?=Yii::t('app','exam_categories')?>
                        </label>
                        <select class="exam__select select-dropdown-yellow" id="exam_cats">
                            <option value="0" selected><?=Yii::t('app','exam_not_select')?></option>
                            <?php foreach($categories as $category){
                                if($category->name == '') continue;
                                ?>
                                <option value="<?= $category->id ?>"><?= $category->name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="exam__control-container">
                        <label for="" class="exam__input-label"><?=Yii::t('app','exam_e')?>
                        </label>
                        <select class="exam__select select-dropdown-yellow" id="exams_item">
                            <option value="0" selected><?=Yii::t('app','exam_not_select')?></option>
                        </select>
                        <div class="exam__hint exam__hint_no-margin" style="display:none" id="exam_help"><span>

                      <?=Yii::t('app','exam_detail')?></span>
                            <div class="exam__hint-content exam__hint-content_large" id="exam_desc">

                            </div>
                        </div>
                    </div>
                    <div class="exam__control-container exam__control-container_btn">
                        <button class="btn btn_green btn_b-green btn_t-white btn_next to-step-3" id="current_exam" disabled><?=Yii::t('app','exam_next')?>
                        </button>
                    </div>
                </div>
                <div class="btn btn_light-pink btn_b-light-pink btn_t-white btn_back to-step-1"><?=Yii::t('app','exam_prev')?>
                </div>
            </div>
            <div class="exam__container exam__container_1-3">
                <div class="exam__title exam__title_calendar"><span>3/3 </span><?=Yii::t('app','exam_choose_date')?>
                </div>
                <div class="exam__content exam__content_xl">
                    <div class="exam__calendar">
                    </div>
                </div>
                <div class="btn btn_light-pink btn_b-light-pink btn_t-white btn_back" id="back_2"><?=Yii::t('app','exam_prev')?>
                </div>
                <div class="popup-container">
                    <div id="popup_exam" class="popup popup_exam popup_large">

                    </div>
                    <?= $form ?>
                </div>
            </div>
        </div>
        <?= $this->render('../site/_examsList');?>
    </div>
</div>
<div class="description description_grey">
    <div class="container container_descr">
        <div class="description__title">
            <h3><?=Yii::t('app','exam_partner_prog')?></h3>
        </div>

        <?= $static_text[1]->content ?>

        <a href="<?= \yii\helpers\Url::to(['exams/partners']) ?>" class="btn btn_green btn_b-dark-green"><?=Yii::t('app','exam_detail_2')?></a>
    </div>
</div>
<?php if(!empty($partners)){?>
<div class="partners">
    <div class="partners__container container">
        <div class="section">
            <div class="section__title">
                <h2><?=Yii::t('app','exam_centers')?></h2>
            </div>
            <div class="partners__slider">
                <?php foreach($partners as $item){?>
                <div class="partners__slider-item"><a target="_blank" href="<?=$item->link?>"><img src="<?= \yii\helpers\Url::to('@web/images/'.$item->image) ?>" alt="<?=$item->imageAlt?>" title="<?=$item->imageTitle?>" class="partners__slider-picture" role="presentation"/></a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<div class="description description_purple">
    <div class="container container_descr">
        <div class="description__title">
            <h3><?=Yii::t('app','exam_why')?></h3>
        </div>
        <?= $static_text[2]->content ?>

        <a href="#sales_id" id="register_a" class="btn btn_yellow btn_b-grey"><?= Yii::t('app', 'Записатися');?></a>
    </div>
</div>

<?php
$js = <<<JS
$(document).ready(function(){
	$(document).on("click","#register_a", function (event) {
		event.preventDefault();

		var id  = $(this).attr('href'),
			top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 1500);
	});
});
JS;
$this->registerJs($js);
?>