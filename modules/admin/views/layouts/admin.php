<?php
use app\assets\AdminAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use pjhl\multilanguage\assets\ChangeLanguageAsset;
use yii\helpers\Url;
ChangeLanguageAsset::register($this);
AdminAsset::register($this);
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
            <div class="row">
                <a href="<?=Url::to(['/site/index'])?>">Главная</a>
                <?if(!Yii::$app->user->isGuest):?>
                    <a href="<?=Url::to(['/site/logout'])?>">Выход</a>
                <?endif;?>
           </div>
            <?= Breadcrumbs::widget([
                'homeLink' => ['label' => 'Admin', 'url' => '/admin'],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <br>
            <?= $content ?>
        </div>
    </div>
    <footer class="footer">

    </footer>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>