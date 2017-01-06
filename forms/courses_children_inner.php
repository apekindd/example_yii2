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
                        <label for="" class="form__label"><?= Yii::t('app', 'child_fio');?></label>
                        <input type="text" name="<?= ES_CHILD_FIO ?>" class="form__input" required/>
                    </div>
                    <div class="form__input-container">
                        <label for="" class="form__label"><?= Yii::t('app', 'child_birthday');?></label>
                        <input type="text" name="<?= ES_CHILD_BIRTH ?>" placeholder="__.__.____" class="form__input birthday" required/>
                    </div>
                    <div class="form__input-container">
                        <label for="" class="form__label"><?= Yii::t('app', 'parent_name');?></label>
                        <input type="text" name="<?= ES_FIRST_NAME ?>" class="form__input" required/>
                    </div>
                    <div class="form__input-container">
                        <label for="" class="form__label"><?= Yii::t('app', 'parent_phone');?></label>
                        <input type="tel" placeholder="+380 (__) ___-____" class="form__input phone" name="<?= ES_SMS ?>" required/>
                    </div>
                    <div class="form__input-container">
                        <input type="checkbox" id="checkbox" class="form__checkbox checkbox agree">
                        <label for="checkbox" class="form__label form__label_checkbox"><?= Yii::t('app','agree'); ?></label>
                    </div>
                </div>
                <div class="form__container">
                    <div class="form__input-container">
                        <label for="" class="form__label"><?= Yii::t('app', 'parent_email');?>
                        </label><input type="email" class="form__input" name="<?= ES_EMAIL ?>" required/>
                    </div>
                    <div class="form__input-container">
                        <label for="" class="form__label"><?= Yii::t('app', 'Оберіть відділення');?>
                        </label>
                        <select id="select2" class="form__select" name="<?= ES_OFFICE ?>" required>
                            <option value="notSelected" selected>-<?= Yii::t('app', 'не вибрано');?>-</option>
                            <? foreach ($arr['contacts'] as $item) :?>
                                <option value="<?= $item->nameEsputnik ?>"><?=$item->name?></option>
                            <? endforeach;?>
                        </select>
                    </div>
                    <div class="form__input-container">
                        <label for="" class="form__label"><?= Yii::t('app', 'Ваш коментар');?>
                        </label><textarea  name="<?= ES_COMMENT ?>" rows="4" class="form__input form__input_textarea"></textarea>
                    </div>
                    <input type="hidden" name="<?= ES_CLIENT_TYPE ?>" value="CHAILD">
                    <input type="hidden" name="<?= ES_EXAM_PREPARATION ?>" value="">
                    <input type="hidden" name="<?= ES_TITLE ?>" value="Запись на курс <?=$arr['course']->title?>">
                    <input type="hidden" name="<?= ES_TYPE ?>" value="<?=$this->getGroupsId("c", $arr['course']->id, "deti") ?>">
                    <a href="#" class="btn btn_green btn_b-dark-green join"><?= Yii::t('app', 'Записатися');?></a>
                </div>
            </form>
        </div>
        <div class="popup__close">
        </div>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/forms/thank.php"; ?>
</div>