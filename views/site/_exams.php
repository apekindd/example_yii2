<script>var exams = <?=$examsAll?>;</script>
<? foreach ($exams as $item):?>

    <div class="exam-card">
        <div class="exam-card__title-container">
            <div class="exam-card__title">
                <?=$item->abbr?>
            </div>
            <div class="exam-card__subtitle">
                <?=$item->abbr_text?>
            </div>
            <div class="exam-card__title">
                <?=$item->level?>
            </div>
            <div class="exam-card__subtitle">
                <?=$item->level_text?>
            </div>
        </div>
        <div class="exam-card__price-container">
            <?= Yii::t('app', 'Ціна');?>
            <div class="exam-card__price">
                <?=$item->price?>
            </div>
        </div>
        <div class="exam-card__text">
            <?=$item->anons?>
        </div>
        <?php if($item->exam_id > 0){?>
        <a href="#" data-id="<?= $item->exam_id ?>" class="exam-card__btn btn btn_green btn_b-dark-green btnz-calendar">
            <?= Yii::t('app', 'Записатись');?>
        </a>
        <?php } ?>
    </div>

<? endforeach;?>
<div class="popup-container" id="exam_container">
    <div id="popup_exam" class="popup popup_exam popup_large">

    </div>
    <?= $form ?>
    <div id="popup_calendar" style="width:auto" class="popup popup_form">
        <div class="exam__title exam__title_calendar"><?=Yii::t('app','exam_choose_date')?>
        </div>
        <div class="exam__content exam__content_xl">
            <div class="exam__calendar">
            </div>
        </div>
        <div class="popup__close">
        </div>
    </div>
    <div id="popup2" class="popup popup_form popup_large">
        <div class="form">
            <div class="form__title">Запись на экзамен
            </div>
            <div class="form__subtitle">Заполните форму ниже
            </div>
            <form>
                <div class="form__container">
                    <div class="form__input-container">
                        <label for="" class="form__label">Ваше имя и фамилия
                        </label><input type="text" class="form__input"/>
                    </div>
                    <div class="form__input-container">
                        <label for="" class="form__label">Ваш email
                        </label><input type="text" class="form__input"/>
                    </div>
                    <div class="form__input-container">
                        <label for="" class="form__label">Ваш телефон
                        </label><input type="text" placeholder="+380 (__) ___-____" class="form__input phone"/>
                    </div>
                    <div class="form__input-container">
                        <label for="" class="form__label">Ваша дата рождения
                        </label><input type="text" placeholder="__-__-____" class="form__input birthday"/>
                    </div>
                    <div class="form__input-container">
                        <label for="" class="form__label">Ваш комментарий
                        </label><textarea rows="4" class="form__input form__input_textarea"></textarea>
                    </div><a href="#" class="btn btn_green btn_b-dark-green">Записаться</a>
                </div>
                <div class="form__container">
                    <div class="form__input-container">
                        <label for="" class="form__label">Ваше имя и фамилия
                        </label><input type="text" class="form__input"/>
                    </div>
                    <div class="form__input-container">
                        <label for="" class="form__label">Ваш email
                        </label><input type="text" class="form__input"/>
                    </div>
                    <div class="form__input-container">
                        <label for="" class="form__label">Ваш телефон
                        </label><input type="text" placeholder="+380 (__) ___-____" class="form__input phone"/>
                    </div>
                    <div class="form__input-container">
                        <label for="" class="form__label">Ваша дата рождения
                        </label><input type="text" placeholder="__-__-____" class="form__input birthday"/>
                    </div>
                    <div class="form__input-container">
                        <label for="" class="form__label">Ваш комментарий
                        </label><textarea rows="4" class="form__input form__input_textarea"></textarea>
                    </div><a href="#" class="btn btn_green btn_b-dark-green">Записаться</a>
                </div>
            </form>
        </div>
        <div class="popup__close">
        </div>
    </div>
</div>


