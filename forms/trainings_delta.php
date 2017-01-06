<div class="popup-container">
    <div id="popup2" class="popup popup_form popup_large">
        <div class="form">
            <div class="form__title"><?= Yii::t('app', 'ЗАПИС НА ТРЕНІНГ');?>
            </div>
            <div class="form__subtitle"><?= Yii::t('app', 'Для цього необхідно заповнити форму і пройти тестування:');?>
            </div>
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
                        <label for="" class="form__label"><?= Yii::t('app', 'Ваш email');?>
                        </label><input type="text" class="form__input" name="<?=ES_EMAIL?>" required/>
                    </div>
                    <div class="form__input-container">
                        <input type="checkbox" id="checkbox222" class="form__checkbox checkbox agree">
                        <label for="checkbox222" class="form__label form__label_checkbox"><?= Yii::t('app','agree'); ?></label>
                    </div>
                </div>
                <div class="form__container">
                    <div class="form__input-container">
                        <label for="" class="form__label"><?= Yii::t('app', 'Стать');?>
                        </label>
                        <select id="select3" class="form__select" name="<?=ES_SEX?>" required>
                            <OPTION value="male" selected><?= Yii::t('app', 'Чоловіча');?></OPTION>
                            <OPTION value="female"><?= Yii::t('app', 'Жіноча');?></OPTION>
                        </select>
                    </div>
                    <div class="form__input-container">
                        <label for="" class="form__label"><?= Yii::t('app', 'birthday');?></label>
                        <input type="text" name="<?=ES_BIRTH?>" placeholder="__.__.____" class="form__input birthday" required/>
                    </div>
                    <div class="form__input-container">
                        <label for="" class="form__label"><?= Yii::t('app', 'Національність');?>
                        </label><input type="text" name="<?=ES_NATIONALITY?>" class="form__input" required/>
                    </div>
                    <div class="form__input-container needValidate">
                        <label for="" class="form__label"><?= Yii::t('app', 'Виберіть модуль');?>
                        </label>
                        <div class="form__multiselect">
                            <div class="form__multiselect-input"><span class="form__multiselect-val">-<?= Yii::t('app', 'не вибрано');?>-</span><span class="form__multiselect-check-val"></span><span class="form__multiselect-icon"></span>
                            </div>
                            <div class="form__multiselect-content">
                                <div class="form__input-container"><input type="checkbox" name="<?=ES_MODULE_DELTA_1?>" id="checkbox1" value="1" class="form__checkbox"/>
                                    <label for="checkbox1" class="form__label form__label_checkbox">delta module1
                                    </label>
                                </div>
                                <div class="form__input-container"><input type="checkbox" name="<?=ES_MODULE_DELTA_2?>" id="checkbox2" value="2" class="form__checkbox"/>
                                    <label for="checkbox2" class="form__label form__label_checkbox">delta module2
                                    </label>
                                </div>
                                <div class="form__input-container"><input type="checkbox" name="<?=ES_MODULE_DELTA_3?>" id="checkbox3" value="3" class="form__checkbox"/>
                                    <label for="checkbox3" class="form__label form__label_checkbox">delta module3
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="<?=ES_CLIENT_TYPE?>" value="TEACH">
                    <input type="hidden" name="<?=ES_TYPE?>" value="Site_teachers_DELTA">
                    <input type="hidden" name="<?=ES_TITLE?>" value="ЗАПИСЬ НА тренинг <?=$arr['training']->nameEsputnik?>">
                </div>
                <a href="#" class="btn btn_green btn_b-dark-green join"><?= Yii::t('app', 'Записатися');?></a>
            </form>
        </div>
        <div class="popup__close">
        </div>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . "/forms/thank.php"; ?>
</div>
