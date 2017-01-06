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
        <meta content="width=device-width, minimum-scale=1, maximum-scale=1" name="viewport">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <main>
        <div class="header-wrap">
            <header class="header">
                <div class="header__container container">
                    <div class="header__top"><a href="<?=Url::to(['site/index'])?>" class="header__logo"><img src="/img/logo.png" class="header__logo-img" alt="" role="presentation"/></a>
                        <div class="header__center-content">
                            <div class="header__phone">(044) 238-98-70
                            </div>
                            <div class="header__search">
                                <form action="<?=Url::to(['site/search/'])?>">
                                    <input type="text" name="q" class="header__search-input">
                                    <button type="submit" class="header__search-button" value="Искать"></button>
                                </form>
                            </div>
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
                    <div class="header__menu">
                        <ul class="header__menu-list">
                            <li class="header__menu-item"> <a href="#">Курсы</a>
                            </li>
                            <li class="header__menu-item"> <a href="#">Тренинги для преподователей</a>
                            </li>
                            <li class="header__menu-item"> <a href="#">Международные экзамены</a>
                            </li>
                            <li class="header__menu-item"> <a href="#">Книжный центр</a>
                            </li>
                            <li class="header__menu-item"> <a href="<?=Url::to(['site/about/', 'symbol'=>'contacts'])?>">Контакты</a>
                            </li>
                        </ul>
                    </div>
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
                        <div class="footer__btn-container"><a href="#" class="footer__btn footer__btn_white footer__btn_b-green">Запись на тестирование</a>
                        </div>
                        <div class="footer__btn-container footer__btn-container_dark"><a href="#" class="footer__btn footer__btn_white footer__btn_b-blue">Наш блог</a>
                        </div>
                        <div class="footer__btn-container footer__btn-container_darken">
                            <div class="footer__right-title">Книжный центр
                            </div><a href="#" class="footer__btn footer__btn_green footer__btn_b-white">Интернет магазин</a>
                        </div>
                    </div>
                    <ul class="footer__social">
                        <li class="footer__social-item"><a href="#" class="footer__social-link">
                                <IMG src="/img/vk-icon.png"></IMG></a>
                        </li>
                        <li class="footer__social-item"><a href="#" class="footer__social-link">
                                <IMG src="/img/twitter-icon.png"></IMG></a>
                        </li>
                        <li class="footer__social-item"><a href="#" class="footer__social-link">
                                <IMG src="/img/youtube-icon.png"></IMG></a>
                        </li>
                        <li class="footer__social-item footer__social-item_fb-1"><a href="#" class="footer__social-link">
                                <IMG src="/img/fb-1-icon.png"></IMG></a>
                        </li>
                        <li class="footer__social-item footer__social-item_fb-2"><a href="#" class="footer__social-link">
                                <IMG src="/img/fb-2-icon.png"></IMG></a>
                        </li>
                    </ul>
                    <div class="footer__links"><a href="#" class="footer__link">Карта сайта</a><a href="#" class="footer__link">Связаться с нами</a>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>