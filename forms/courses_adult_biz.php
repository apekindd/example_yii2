<div class="popup-container">
    <div id="popup2" class="popup popup_form popup_large">
        <div class="form">
            <div class="form__title"><?= Yii::t('app', 'ЗАПИС НА КУРС');?>
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
                        </label><input type="email" class="form__input" name="<?=ES_EMAIL?>" required/>
                    </div>
                    <div class="form__input-container">
                        <input type="checkbox" id="checkbox222" class="form__checkbox checkbox agree">
                        <label for="checkbox222" class="form__label form__label_checkbox"><?= Yii::t('app','agree'); ?></label>
                    </div>
                </div>
                <div class="form__container">
                    <div class="form__input-container">
                        <label for="" class="form__label"><?= Yii::t('app', 'Виберіть рівень володіння мовою');?>
                        </label>
                        <select id="select1" class="form__select" name="<?=ES_LEVEL?>" required>
                            <OPTION value="Intermediate" selected>Intermediate</OPTION>
                            <OPTION value="Upper-Intermediate">Upper-Intermediate</OPTION>
                            <OPTION value="Advanced">Advanced</OPTION>
                        </select>
                    </div>
                    <div class="form__input-container">
                        <label for="" class="form__label"><?= Yii::t('app', 'Оберіть відділення');?>
                        </label>
                        <select id="select2" class="form__select" name="<?=ES_OFFICE?>" required>
                            <OPTION value="notSelected" selected>-<?= Yii::t('app', 'не вибрано');?>-</OPTION>
                            <? foreach ($arr['contacts'] as $item) :?>
                            <OPTION value="<?= $item->nameEsputnik ?>"><?=$item->name?></OPTION>
                            <? endforeach;?>
                        </select>
                    </div>
                    <div class="form__input-container">
                        <label for="" class="form__label"><?= Yii::t('app', 'Ваш коментар');?>
                        </label><textarea rows="4" class="form__input form__input_textarea" name="<?=ES_COMMENT?>"></textarea>
                    </div>
                    <input type="hidden" name="<?=ES_CLIENT_TYPE?>" value="ADULT">
                    <input type="hidden" name="<?=ES_TITLE?>" value="ЗАПИСЬ НА КУРС <?=$arr['course']->title?>">
                    <input type="hidden" name="<?=ES_TYPE?>" value="<?=$this->getGroupsId("c", $arr['course']->id,'vzroslye') ?>">
                    <a href="#" class="btn btn_green btn_b-dark-green join"><?= Yii::t('app', 'Записатися');?></a>
                </div>
            </form>
        </div>
        <div class="popup__close">
        </div>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . "/forms/thank.php"; ?>
</div>