<div id="popup-singup" class="popup popup_form">
    <div class="form">
        <div class="form__title"><?= Yii::t('app','Запис на іспит') ?></div>
        <div class="form__subtitle"><?= Yii::t('app','Заповніть форму нижче') ?></div>
        <form name="name" id="myForm" action="/esputnik/send">
            <div class="form__container">
                <div class="form__input-container">
                    <label for="" class="form__label"><?= Yii::t('app',"Ваше ім'я та прізвище") ?></label>
                    <input name="<?=ES_FIRST_NAME?>" type="text" class="form__input" required />
                </div>
                <div class="form__input-container">
                    <label for="" class="form__label"><?= Yii::t('app', 'Ваш email');?>
                    </label><input name="<?=ES_EMAIL?>" type="text" class="form__input" required />
                </div>
                <div class="form__input-container">
                    <label for="" class="form__label"><?= Yii::t('app', 'Ваш телефон');?>
                    </label><input type="text" name="<?=ES_SMS?>" placeholder="+380 (__) ___-____" class="form__input phone" required />
                </div>
                <div class="form__input-container">
                    <label for="" class="form__label"><?= Yii::t('app',"Ваша дата народження") ?></label><input type="text" name="<?=ES_BIRTH?>" placeholder="__-__-____" class="form__input birthday"/>
                </div>
                <input type="hidden" name="<?=ES_TITLE?>" value="Запись на экзамен">
                <input type="hidden" id="cur_exam" name="<?=ES_TYPE?>" value="">
                <div class="form__input-container">
                    <label for="" class="form__label"><?= Yii::t('app', 'Ваш коментар');?>
                    </label><textarea rows="4" class="form__input form__input_textarea" name="<?= ES_COMMENT ?>"></textarea>
                </div><a href="#" class="btn btn_green btn_b-dark-green join"><?= Yii::t('app', 'Записатися');?></a>
            </div>
        </form>
    </div>
    <div class="popup__close">
    </div>
</div>
<? include $_SERVER['DOCUMENT_ROOT'] . "/forms/thank_exam.php"; ?>