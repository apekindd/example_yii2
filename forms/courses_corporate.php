<div class="popup-container">
    <div id="popup2" class="popup popup_form popup_large">
        <div class="form">
            <div id="htext">
                
            </div>
            <form name="name" id="myForm" action="/esputnik/send">

            </form>
        </div>
        <div class="popup__close">
        </div>
    </div>
</div>

<div id="corpContainer2" style="display:none;">
    <div class="form__title"><?= Yii::t('app', 'ЗАЛИШИТИ ЗАЯВКУ НА КОРПОРАТИВНІ КУРСИ');?>
    </div>
    <div class="form__subtitle"><?= Yii::t('app', 'Для цього необхідно заповнити форму:');?>
    </div>
</div>

<div id="uaContainer2" style="display:none;">
    <div class="form__title"><?= Yii::t('app', 'ЗАПИСАТИСЯ НА КУРСИ УКРАЇНСЬКОЇ / РОСІЙСЬКОЇ МОВ');?>
    </div>
    <div class="form__subtitle"><?= Yii::t('app', 'Для цього необхідно заповнити форму:');?>
    </div>
</div>

<div id="corpContainer" style="display:none;">
        <div class="form__container">
            <div class="form__input-container">
                <label for="" class="form__label"><?= Yii::t('app', 'Назва компанії');?>
                </label><input type="text" name="<?=ES_CORP_COMPANY?>" class="form__input" required/>
            </div>
            <div class="form__input-container">
                <label for="" class="form__label"><?= Yii::t('app', 'Ваше ім\'я');?>
                </label><input type="text" name="<?=ES_FIRST_NAME?>" class="form__input" required/>
            </div>
            <div class="form__input-container">
                <label for="" class="form__label"><?= Yii::t('app', 'Ваше прізвище');?>
                </label><input type="text" name="<?=ES_LAST_NAME?>" class="form__input" required/>
            </div>
            <div class="form__input-container">
                <label for="" class="form__label"><?= Yii::t('app', 'Ваша посада');?>
                </label><input type="text" name="<?=ES_CORP_POSITION?>" class="form__input" required/>
            </div>
            <div class="form__input-container">
                <input type="checkbox" id="checkbox222" class="form__checkbox checkbox agree">
                <label for="checkbox222" class="form__label form__label_checkbox"><?= Yii::t('app','agree'); ?></label>
            </div>
        </div>
        <div class="form__container">
            <div class="form__input-container">
                <label for="" class="form__label"><?= Yii::t('app', 'Кількість учнів');?>
                </label><input type="text" name="<?=ES_CORP_STUDENTS?>" class="form__input" required/>
            </div>
            <div class="form__input-container">
                <label for="" class="form__label"><?= Yii::t('app', 'Ваш телефон');?>
                </label><input type="tel" placeholder="+380 (__) ___-____" class="form__input phone" name="<?=ES_SMS?>" required/>
            </div>
            <div class="form__input-container">
                <label for="" class="form__label"><?= Yii::t('app', 'Ваш email');?>
                </label><input type="email" class="form__input" name="<?=ES_EMAIL?>" required/>
            </div>
            <input type="hidden" name="<?=ES_CORP_TYPE?>" value="CORP">
            <input type="hidden" name="<?=ES_FILL?>" value="Site_korporativnye">
            <input type="hidden" name="<?=ES_TITLE?>" value="ЗАПИСЬ НА Корпоративные курсы">
            <a href="#" class="btn btn_green btn_b-dark-green join"><?= Yii::t('app', 'Записатися');?></a>
        </div>
</div>

<div id="uaContainer" style="display:none;">
    <form name="name" id="myForm" action="/esputnik/send">
        <div class="form__container">
            <div class="form__input-container">
                <label for="" class="form__label"><?= Yii::t('app', 'Ваше ім\'я');?>
                </label><input type="text" name="<?=ES_FIRST_NAME?>" class="form__input" required/>
            </div>
            <div class="form__input-container">
                <label for="" class="form__label"><?= Yii::t('app', 'Ваше прізвище');?>
                </label><input type="text" name="<?=ES_LAST_NAME?>" class="form__input" required/>
            </div>
            <div class="form__input-container">
                <label for="" class="form__label"><?= Yii::t('app', 'Ваш телефон');?>
                </label><input type="tel" placeholder="+380 (__) ___-____" class="form__input phone" name="<?=ES_SMS?>" required/>
            </div>
            <div class="form__input-container">
                <input type="checkbox" id="checkbox222" class="form__checkbox checkbox agree">
                <label for="checkbox222" class="form__label form__label_checkbox"><?= Yii::t('app','agree'); ?></label>
            </div>
        </div>
        <div class="form__container">
            <div class="form__input-container">
                <label for="" class="form__label"><?= Yii::t('app', 'Ваш email');?>
                </label><input type="email" class="form__input" name="<?=ES_EMAIL?>" required/>
            </div>
            <div class="form__input-container">
                <label for="" class="form__label"><?= Yii::t('app', 'Виберіть мову навчання');?>
                </label>
                <select id="select1" class="form__select" name="<?=ES_UA_LANG?>" required>
                    <OPTION value="Украинский" selected><?= Yii::t('app', 'Український');?></OPTION>
                    <OPTION value="Русский"><?= Yii::t('app', 'Російский');?></OPTION>
                </select>
            </div>
            <input type="hidden" name="<?=ES_FILL?>" value="Site_ukrainskij">
            <input type="hidden" name="<?=ES_TITLE?>" value="ЗАПИСЬ НА КУРСЫ УКРАИНСКОГО/РУССКОГО ЯЗЫКОВ">
            <a href="#" class="btn btn_green btn_b-dark-green join"><?= Yii::t('app', 'Записатися');?></a>
        </div>
    </form>
</div>
<? include $_SERVER['DOCUMENT_ROOT'] . "/forms/thank2.php"; ?>
