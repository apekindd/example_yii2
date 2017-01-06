<div class="popup-container">
    <div id="popup2" class="popup popup_form popup_large">
        <div class="form">
            <div class="form__title"><?= Yii::t('app', 'ЗАПИС НА КУРС');?>
            </div>
            <div class="form__subtitle"><?= Yii::t('app', 'Для цього необхідно заповнити форму і пройти тестування:');?>
            </div>
            <form name="name" id="myForm" action="/esputnik/send">
                <!--form-->
            </form>
        </div>
        <div class="popup__close">
        </div>
    </div>
</div>
<div id="territory" style="display:none;">
    <div class="form__container">
        <div class="form__input-container">
            <label for="" class="form__label"><?= Yii::t('app', 'Ваше ім\'я');?></label>
            <input type="text" name="<?= ES_FIRST_NAME ?>" class="form__input" required/>
        </div>
        <div class="form__input-container">
            <label for="" class="form__label"><?= Yii::t('app', 'Ваше прізвище');?></label>
            <input type="text" name="<?= ES_LAST_NAME ?>" class="form__input" required/>
        </div>
        <div class="form__input-container">
            <label for="" class="form__label"><?= Yii::t('app', 'Ваш телефон');?></label>
            <input type="tel" placeholder="+380 (__) ___-____" class="form__input phone" name="<?= ES_SMS ?>" required/>
        </div>
        <div class="form__input-container">
            <input type="checkbox" id="checkbox111" class="form__checkbox agree"/>
            <label for="checkbox111" class="form__label form__label_checkbox"><?= Yii::t('app','agree'); ?>
            </label>
        </div>
    </div>
    <div class="form__container">
        <div class="form__input-container">
            <label for="" class="form__label"><?= Yii::t('app', 'Ваш email');?>
            </label><input type="email" class="form__input" name="<?= ES_EMAIL ?>" required/>
        </div>
        <div class="form__input-container">
            <label for="" class="form__label"><?= Yii::t('app', 'institution');?>
            </label><input type="text" class="form__input" name="<?= ES_SCHOOL_NAME ?>" required/>
        </div>
        <div class="form__input-container">
            <label for="" class="form__label"><?= Yii::t('app', 'position');?>
            </label><input type="text" class="form__input" name="<?= ES_POSITION ?>" required/>
        </div>
        <input type="hidden" name="<?= ES_CLIENT_TYPE ?>" value="TEACH">
        <input type="hidden" name="<?= ES_TYPE ?>" value="Site_teachers_na_teritorii_zamovnika">
        <input type="hidden" name="<?= ES_TITLE ?>" value="Запись на тренинг на территории заказчиков">
        <a href="#" class="btn btn_green btn_b-dark-green join"><?= Yii::t('app', 'Записатися');?></a>
    </div>
</div>
<div id="one_day" style="display:none;">
    <div class="form__container">
        <div class="form__input-container">
            <label for="" class="form__label"><?= Yii::t('app', 'Ваше ім\'я');?></label>
            <input type="text" name="<?= ES_FIRST_NAME ?>" class="form__input" required/>
        </div>
        <div class="form__input-container">
            <label for="" class="form__label"><?= Yii::t('app', 'Ваше прізвище');?></label>
            <input type="text" name="<?= ES_LAST_NAME ?>" class="form__input" required/>
        </div>
        <div class="form__input-container">
            <label for="" class="form__label"><?= Yii::t('app', 'Ваш телефон');?></label>
            <input type="tel" placeholder="+380 (__) ___-____" class="form__input phone" name="<?= ES_SMS ?>" required/>
        </div>
        <div class="form__input-container">
            <input type="checkbox" id="checkbox222" class="form__checkbox checkbox agree">
            <label for="checkbox222" class="form__label form__label_checkbox"><?= Yii::t('app','agree'); ?></label>
        </div>
    </div>
    <div class="form__container">
        <div class="form__input-container">
            <label for="" class="form__label"><?= Yii::t('app', 'Ваш email');?>
            </label><input type="email" class="form__input" name="<?= ES_EMAIL ?>" required/>
        </div>
        <div class="form__input-container">
            <label for="" class="form__label">Choose qualification
            </label>
            <div class="form__multiselect">
                <div class="form__multiselect-input">
                    <span class="form__multiselect-val">-<?= Yii::t('app', 'не вибрано');?>-</span><span class="form__multiselect-check-val"></span><span class="form__multiselect-icon"></span>
                </div>
                <div class="form__multiselect-content multi-qualificsation form__multiselect-content_col">
                    <div class="form__input-container form__input-container_col">
                        <input type="checkbox" id="checkbox1" value="Delta module 1" class="form__checkbox"/>
                        <label for="checkbox1" class="form__label form__label_checkbox">Delta module 1</label>
                    </div>
                    <div class="form__input-container form__input-container_col">
                        <input type="checkbox" id="checkbox2" value="Delta module 2" class="form__checkbox"/>
                        <label for="checkbox2" class="form__label form__label_checkbox">Delta module 2</label>
                    </div>
                    <div class="form__input-container form__input-container_col">
                        <input type="checkbox" id="checkbox3" value="Delta module 3" class="form__checkbox"/>
                        <label for="checkbox3" class="form__label form__label_checkbox">Delta module 3</label>
                    </div>
                    <div class="form__input-container form__input-container_col">
                        <input type="checkbox" id="checkbox4" value="CELTA" class="form__checkbox"/>
                        <label for="checkbox4" class="form__label form__label_checkbox">CELTA</label>
                    </div>
                    <div class="form__input-container form__input-container_col">
                        <input type="checkbox" id="checkbox5" value="1" class="form__checkbox"/>
                        <label for="checkbox5" class="form__label form__label_checkbox">IHC</label>
                    </div>
                    <div class="form__input-container form__input-container_col">
                        <input type="checkbox" id="checkbox6" value="IHCYLT" class="form__checkbox"/>
                        <label for="checkbox6" class="form__label form__label_checkbox">IHCYLT</label>
                    </div>
                    <div class="form__input-container form__input-container_col">
                        <input type="checkbox" id="checkbox8" value="CELTYL" class="form__checkbox"/>
                        <label for="checkbox8" class="form__label form__label_checkbox">CELTYL</label>
                    </div>
                    <div class="form__input-container form__input-container_col">
                        <input type="checkbox" id="checkbox9" value="TKT" class="form__checkbox"/>
                        <label for="checkbox9" class="form__label form__label_checkbox">TKT</label>
                    </div>
                    <div class="form__input-container form__input-container_col">
                        <input type="checkbox" id="checkbox10" value="BA" class="form__checkbox"/>
                        <label for="checkbox10" class="form__label form__label_checkbox">BA (please specify in "other")</label>
                    </div>
                    <div class="form__input-container form__input-container_col">
                        <input type="checkbox" id="checkbox11" value="MA" class="form__checkbox"/>
                        <label for="checkbox11" class="form__label form__label_checkbox">MA (please specify in"other")</label>
                    </div>
                    <div class="form__input-container form__input-container_col">
                        <input type="checkbox" id="checkbox12" value="1" class="form__checkbox"/>
                        <label for="checkbox12" class="form__label form__label_checkbox">Other</label>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="<?= ES_CLIENT_TYPE ?>" value="TEACH">
        <input type="hidden" class="qualifications" name="<?= ES_QUALIFICATION ?>">
        <input type="hidden" name="<?= ES_TYPE ?>" value="Site_teachers_one-day_seminars">
        <input type="hidden" name="<?= ES_TITLE ?>" value="Запись на однодневные семинары-тренинги">
        <a href="#" class="btn btn_green btn_b-dark-green join"><?= Yii::t('app', 'Записатися');?></a>
    </div>
    <div id="popup3" class="popup popup_form popup_submit">
        <div class="form">
            <div class="form__title"><?= Yii::t('app', 'Дякуємо за реєстрацію');?>
            </div>
            <div class="form__subtitle"><?= Yii::t('app', 'Ваша заявка відправлена');?>
            </div>
            <div class="form__text"><?= Yii::t('app', 'На этом этапе Вы можете пройти on-line тест (1 час 20 минут) или получить тест на почту и пройти его в удобное для Вас время.');?>
            </div>
            <div class="form__container"><a href="#" class="btn btn_light-blue btn_b-dark-blue"><?= Yii::t('app', 'Пройти тест');?></a>
            </div>
            <div class="form__container"><a href="#" class="btn btn_light-purple btn_b-purple"><?= Yii::t('app', 'Отримати тест на пошту');?></a>
            </div>
        </div>
        <div class="popup__close">
        </div>
    </div>
</div>