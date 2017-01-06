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
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <div class="row">
                <a href="<?=Url::to(['site/index'])?>">Главная</a>
                <a href="<?=Url::to(['site/contacts'])?>">Контакты</a>
                <a href="<?=Url::to(['/admin'])?>">Admin</a>
                <? if($url[1] != 'en'):?><a href="#" class="multilanguage-set" data-language="1">EN</a><?endif;?>
                <? if($url[1] != 'ru'):?><a href="#" class="multilanguage-set" data-language="2">RU</a><?endif;?>
                <? if($url[1] == 'ru' || $url[1] == 'en'):?><a href="#" class="multilanguage-set" data-language="3">UA</a><?endif;?>
            </div>
            <br>
            <div class="row">
                <form action="<?=Url::to(['site/search'])?>">
                    <input type="text" name="q">
                    <input type="submit" value="Искать">
                </form>
            </div>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div>
                <h2>Курсы</h2>
                <ul>
                    <li><a href="<?=Url::to(['site/courses', 'symbol'=>'adult'])?>">Для взрослых</a></li>
                    <li><a href="<?=Url::to(['site/courses', 'symbol'=>'children'])?>">Для детей</a></li>
                    <li><a href="<?=Url::to(['site/courses', 'symbol'=>'exam'])?>">Подготовка к экзаменам</a></li>
                    <li><a href="<?=Url::to(['site/courses', 'symbol'=>'corporate'])?>">Корпоративные курсы</a></li>
                    <li><a href="<?=Url::to(['site/courses', 'symbol'=>'corporate'])?>">Украинский и русский для иностранцев</a></li>
                </ul>
            </div>
            <div>
                <h2>Тренинги</h2>
                <ul>
                    <li><a href="<?=Url::to(['site/trainings', 'symbol'=>'delta'])?>">Курсы DELTA</a></li>
                    <li><a href="<?=Url::to(['site/trainings', 'symbol'=>'celta'])?>">Курсы CELTA</a></li>
                    <li><a href="<?=Url::to(['site/trainings', 'symbol'=>'celt_c'])?>">Курсы CELT-C</a></li>
                    <li><a href="<?=Url::to(['site/trainings', 'symbol'=>'celt_p'])?>">Курсы CELT-P</a></li>
                    <li><a href="<?=Url::to(['site/trainings', 'symbol'=>'modul'])?>">Модульные курсы</a></li>
                    <li><a href="<?=Url::to(['site/trainings', 'symbol'=>'other'])?>">Другие тренинги</a></li>
                </ul>
            </div>
            <div>
                <h2><a href="/exams">Экзамены</a></h2>
                <ul>
                    <li><a href="/exams/children">Для детей</a></li>
                    <li><a href="/exams/teens">Для подростков</a></li>
                    <li><a href="/exams/adults">Для взрослых</a></li>
                    <li><a href="/exams/professionals">Для профессионалов</a></li>
                    <li><a href="/exams/teachers">Для учителей</a></li>
                    <li><a href="/exams/partners">Для партнеров</a></li>
                </ul>
            </div>
            <div>
                <h2>О компании</h2>
                <ul>
                    <li><a href="<?=Url::to(['site/about', 'symbol'=>'history'])?>">Компания</a></li>
                    <li><a href="<?=Url::to(['site/news'])?>">Новости</a></li>
                    <li><a href="<?=Url::to(['site/offers'])?>">Акции</a></li>
                    <li><a href="<?=Url::to(['site/blog'])?>">Блог</a></li>
                    <li><a href="<?=Url::to(['site/about', 'symbol'=>'partners'])?>">Партнёры</a></li>
                </ul>
            </div>
            <div>
                <h2>Обучение</h2>
                <ul>
                    <li><a href="<?=Url::to(['site/study', 'symbol'=>'schedule'])?>">Расписание курсов и тренингов</a></li>
                    <li><a href="<?=Url::to(['site/study', 'symbol'=>'academic'])?>">Академический календарь</a></li>
                    <li><a href="<?=Url::to(['site/study', 'symbol'=>'methods'])?>">Методика и формы обучения</a></li>
                    <li><a href="<?=Url::to(['site/study', 'symbol'=>'levels'])?>">Уровни языка</a></li>
                    <li><a href="<?=Url::to(['site/study', 'symbol'=>'rules'])?>">Правила обучения</a></li>
                    <li><a href="<?=Url::to(['site/study', 'symbol'=>'loyalty'])?>">Программа лояльности</a></li>
                </ul>
            </div>

        </div>
    </footer>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>