<div class="popup-container">
    <div id="popup2" class="popup popup_form popup_large">
        <div class="form">
            <div class="form__title"><?= Yii::t('app', 'СТАТИ ПАРТНЕРОМ ILCENTRE ЛЕГКО.');?>
            </div>
            <div class="form__subtitle"><?= Yii::t('app', 'Залиште заявку');?>
            </div>
            <form name="name" id="myForm" action="/esputnik/send">
                <div class="form__container">
                    <div class="form__input-container">
                        <label for="" class="form__label"><?= Yii::t('app', 'Назва навчального закладу');?></label>
                        <input type="text" name="<?= ES_EXAM_UZ ?>" class="form__input" required/>
                    </div>
                    <div class="form__subtitle"><?= Yii::t('app', 'Контактна особа');?>
                    </div>
                    <div class="form__input-container">
                        <label for="" class="form__label"><?= Yii::t('app', 'Ваше ім\'я');?></label>
                        <input type="text" name="<?= ES_FIRST_NAME ?>" class="form__input" required/>
                    </div>
                    <div class="form__input-container">
                        <label for="" class="form__label"><?= Yii::t('app', 'Ваше прізвище');?>
                        </label><input type="text" name="<?=ES_LAST_NAME?>" class="form__input" required/>
                    </div>
                    <div class="form__input-container">
                        <input type="checkbox" id="checkbox222" class="form__checkbox checkbox agree">
                        <label for="checkbox222" class="form__label form__label_checkbox"><?= Yii::t('app','agree'); ?></label>
                    </div>
                </div>
                <div class="form__container form-partners">
                    <div class="form__input-container">
                        <label for="" class="form__label"><?= Yii::t('app', 'Ваш телефон');?></label>
                        <input type="tel" placeholder="+380 (__) ___-____" class="form__input phone" name="<?= ES_SMS ?>" required/>
                    </div>
                    <div class="form__input-container">
                        <label for="" class="form__label"><?= Yii::t('app', 'Ваш email');?>
                        </label><input type="email" class="form__input" name="<?= ES_EMAIL ?>" required/>
                    </div>
                    <input type="hidden" name="<?= ES_TYPE ?>" value="Site_exam_partner">
                    <input type="hidden" name="<?= ES_TITLE ?>" value="Заявка на партнерство">
                    <a href="#" class="btn btn_green btn_b-dark-green join"><?= Yii::t('app', 'Записатися');?></a>
                </div>
            </form>
        </div>
        <div class="popup__close">
        </div>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . "/forms/thank2.php"; ?>
</div>