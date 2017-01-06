<?php
use app\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use pjhl\multilanguage\assets\ChangeLanguageAsset;
use yii\helpers\Url;
ChangeLanguageAsset::register($this);
AppAsset::register($this);
$url = explode("/",$_SERVER['REQUEST_URI']);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>"> 
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, minimum-scale=1, maximum-scale=1" name="viewport">
        <meta name="description">
        <meta name="keywords">
        <meta property="og:title">
        <meta property="og:description">
        <meta property="og:image">
        <meta property="og:type">
        <meta property="og:url">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
<body>
<?php $this->beginBody() ?>
    <div class="header-wrap">
        <header class="header">
            <div class="header__container container">
                <div class="header__top"><a href="<?=Url::to(['site/index'])?>" class="header__logo"><img src="/img/logo.png" class="header__logo-img" alt="" role="presentation"/></a>
                    <div class="header__center-content">
                        <div class="header__phone">(044) 238-98-70
                        </div>
                        <div class="header__search">
                            <div class="search">
                                <form action="<?=Url::to(['site/search/'])?>">
                                    <input type="search" name="q" class="search__input">
                                    <button type="submit" class="search__button" ></button>
                                </form>
                            </div>
                        </div>
                        <a href="<?=Url::to(['site/single','symbol'=>'bookcenter'])?>" class="header__books-center"> <span>Книжный центр</span></a>
                    </div>
                    <div class="header__action">
                        <div class="header__mobile-menu-btn"><span></span>
                        </div>
                        <button type="button" class="header__login" onclick="javascript:window.location.href='<?=Url::to(['/admin'])?>'"> <span class="header__login-text">Войти</span>
                        </button>
                        <ul class="header__lang">
                            <li class="header__lang-item <? if(Yii::$app->language != 'en' && Yii::$app->language != 'ru'): ?>active<?endif;?>"><a href="#" class="multilanguage-set" data-language="3">Ua</a>
                            </li>
                            <li class="header__lang-item <? if(Yii::$app->language == 'en'): ?>active<?endif;?>"><a href="#" class="multilanguage-set" data-language="1">En</a>
                            </li>
                            <li class="header__lang-item <? if(Yii::$app->language == 'ru'): ?>active<?endif;?>"><a href="#" class="multilanguage-set" data-language="2">Ru</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?= \app\components\HeaderWidget::widget()?>
            </div>
        </header>
    </div>
        <div class="container">
            <?= Breadcrumbs::widget([
                'itemTemplate' => "<li class='breadcrumbs__item'>{link}</li>",
                'activeItemTemplate'=>"<li class='breadcrumbs__item'>{link}</li>",
                'homeLink' => [
                    'label' => Yii::t('app','Головна'),
                    'url' => Url::home(),
                ],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </div>
        <?= $content ?>
        <div class="sub-container">
            <div id="sub_popup" class="popup popup_form popup_large">
                <div class="form">
                    <div class="form__title">ПОДПИСКА НА НОВОСТИ</div>
                    <form name="name" class="myForm" action="/esputnik/send" data-other="sub">
                        <div class="form__container">
                            <div class="form__input-container">
                                <label for="" class="form__label">Ваш email</label>
                                <input type="email" name="<?=ES_EMAIL?>" required class="form__input"/>
                            </div>
                        </div>
                        <div class="form__container">
                            <div class="form__input-container">
                                <label for="" class="form__label">Выберите вашу категорию</label>
                                <select class="form__select" name="<?=ES_TYPE?>" required>
                                        <option value="subscribe_general_english">Я изучаю английский язык</option>
                                        <option value="subscribe_teachers">Я преподаю английский язык</option>
                                </select>
                            </div>
                            <input type="hidden" name="<?=ES_TITLE?>" value="Подписка на новости">
                            <a href="#" class="btn btn_green btn_b-dark-green join">Записаться</a>
                        </div>
                    </form>
                </div>
                <div class="popup__close"></div>
            </div>
        </div>
        <div class="contactme-container">
            <div id="contactme_popup" class="popup popup_form popup_large">
                <div class="form">
                    <div class="form__title">Связаться с нами</div>
                    <form name="name" class="myForm" action="/esputnik/send" data-other="contactme">
                        <div class="form__container">
                            <div class="form__input-container">
                                <label for="" class="form__label"><?= Yii::t('app', 'Ваше ім\'я');?>
                                </label><input type="text" name="<?=ES_FIRST_NAME?>" class="form__input" required/>
                            </div>
                            <div class="form__input-container">
                                <label for="" class="form__label"><?= Yii::t('app', 'Ваш email');?>
                                </label><input type="email" class="form__input" name="<?=ES_EMAIL?>" required/>
                            </div>
                            <div class="form__input-container">
                                <label for="" class="form__label"><?= Yii::t('app', 'Ваш телефон');?>
                                </label><input type="tel" placeholder="+380 (__) ___-____" class="form__input phone" name="<?=ES_SMS?>" required/>
                            </div>
                            <div class="form__input-container">
                                <input type="checkbox" id="checkbox333" class="form__checkbox checkbox agree">
                                <label for="checkbox333" class="form__label form__label_checkbox"><?= Yii::t('app','agree'); ?></label>
                            </div>
                        </div>
                        <div class="form__container">
                            <div class="form__input-container">
                                <label for="" class="form__label"><?= Yii::t('app', 'Ваш коментар');?>
                                </label><textarea rows="11" class="form__input form__input_textarea" name="<?= ES_COMMENT ?>"></textarea>
                            </div>
                            <input type="hidden" name="<?=ES_TITLE?>" value="Связаться с нами">
                            <input type="hidden" name="<?=ES_TYPE?>" value="Site_svyazatsya_s_nami">
                            <a href="#" class="btn btn_green btn_b-dark-green join">Записаться</a>
                        </div>
                    </form>
                </div>
                <div class="popup__close"></div>
            </div>
        </div>
        <footer class="footer">
            <div class="footer__container container">
                <div class="footer__left"><a url="#" class="footer__logo"><img src="/img/footer-logo.png" alt="" role="presentation"/></a>
                    <div class="footer__phone">(044) 238-98-70
                    </div>
                    <div class="footer__address">
                        <div class="footer__name">Школа на КПИ
                        </div>
                        <div class="footer__location">ул. Ванды Василевской 7 04116, Киев, Украина
                        </div>
                    </div>
                    <div class="footer__address">
                        <div class="footer__name">Школа на Оболони
                        </div>
                        <div class="footer__location">ул. Маршала Тимошенко 13А
                        </div>
                    </div>
                    <div class="footer__address">
                        <div class="footer__name">Школа на Осокорках
                        </div>
                        <div class="footer__location">ул. Маршала Тимошенко 13А
                        </div>
                    </div>
                    <div class="footer__address">
                        <div class="footer__name">Экзаменационный центр
                        </div>
                        <div class="footer__location">ул. Ванды Василевской 7 04116, Киев, Украина
                        </div>
                    </div>
                </div>
                <div class="footer__center">
                    <?= \app\components\FooterWidget::widget()?>
                    <div class="footer__right">
                        <div class="footer__btn-container footer__btn-container_grey"><a href="<?= Url::to(['exams/registration']) ?>" class="footer__btn footer__btn_white footer__btn_b-green">Запись на тестирование</a>
                        </div>
                        <div class="footer__btn-container footer__btn-container_dark"><a href="<?=Url::to(['site/blog'])?>" class="footer__btn footer__btn_white footer__btn_b-blue">Наш блог</a>
                        </div>
                        <div class="footer__btn-container footer__btn-container_darken">
                            <div class="footer__right-title">Книжный центр
                            </div><a href="#" class="footer__btn footer__btn_green footer__btn_b-white">Интернет магазин</a>
                        </div>
                    </div>
                    <div class="subscription"><!--<input type="text" placeholder="Email" class="subscription__form"/>--><a id="sub" href="#" class="btn btn_yellow btn_b-grey">Подписка на новости</a>
                    </div>
                    <ul class="footer__social">
                        <li class="footer__social-item"><a href="#" class="footer__social-link">
                                <IMG src="/img/vk-icon.png" alt=""></a>
                        </li>
                        <li class="footer__social-item"><a href="#" class="footer__social-link">
                                <IMG src="/img/twitter-icon.png" alt=""></a>
                        </li>
                        <li class="footer__social-item"><a href="#" class="footer__social-link">
                                <IMG src="/img/youtube-icon.png" alt=""></a>
                        </li>
                        <li class="footer__social-item footer__social-item_fb-1"><a href="#" class="footer__social-link">
                                <IMG src="/img/fb-1-icon.png" alt=""></a>
                        </li>
                        <li class="footer__social-item footer__social-item_fb-2"><a href="#" class="footer__social-link">
                                <IMG src="/img/fb-2-icon.png" alt=""></a>
                        </li>
                    </ul>
                    <div class="footer__links"><a href="<?= Url::to(['site-map/']) ?>" class="footer__link"><?= Yii::t('app','sitemap'); ?></a><a href="#" id="contactme" class="footer__link">Связаться с нами</a>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>