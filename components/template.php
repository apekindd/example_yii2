<?php $this->view->registerCss(".menu__col a{color:#fff}"); ?>
<div class="menu">
    <div class="menu__close-btn">
    </div>

    <ul class="menu__col">
        <li class="menu__title"> <span class="menu__mob-link"><a href="<?=\yii\helpers\Url::to(["courses"])?>">Курсы</a></span>
        </li>
        <? foreach ($courses as $item):?>
            <li class="menu__item">

                <a href="<?=$this->lang. $item->link ?>"><?=$item->title?></a>
            </li>
        <? endforeach;?>
    </ul>
    <ul class="menu__col">
        <li class="menu__title"> <span class="menu__mob-link"><a href="<?=\yii\helpers\Url::to(["trainings"])?>">Тренинги</a></span>
        </li>
        <? foreach ($trainings as $item):?>
            <li class="menu__item">
                <a href="<?=$this->lang. $item->link ?>"><?=$item->title?></a>
            </li>
        <? endforeach;?>
    </ul>
    <ul class="menu__col">
        <li class="menu__title"> <span class="menu__mob-link"><a href="<?=\yii\helpers\Url::to(["exams"])?>">Международные экзамены</a></span>
        </li>
        <? foreach ($exams as $item):?>
            <li class="menu__item">
                <a href="<?=$this->lang. $item->link ?>"><?=$item->title?></a>
            </li>
        <? endforeach;?>
    </ul>
    <ul class="menu__col">
        <li class="menu__title"> <span class="menu__mob-link"><a href="<?=\yii\helpers\Url::to(["about"])?>">О компании</a></span>
        </li>
        <? foreach ($about as $item):?>
            <li class="menu__item">
                <a href="<?=$this->lang. $item->link ?>"><?=$item->title?></a>
            </li>
        <? endforeach;?>
    </ul>
    <ul class="menu__col">
        <li class="menu__title"> <span class="menu__mob-link"><a href="<?=\yii\helpers\Url::to(["study"])?>">Обучение</a></span>
        </li>
        <? foreach ($study as $item):?>
            <li class="menu__item">
                <a href="<?=$this->lang. $item->link ?>"><?=$item->title?></a>
            </li>
        <? endforeach;?>
    </ul>
    <ul class="menu__col menu__col_mob">
        <li class="menu__title"> <span class="menu__mob-link">Язык</span>
        </li>
        <li class="menu__item">
            <a href="#">Українська</a>
        </li>
        <li class="menu__item">
            <a href="#">English</a>
        </li>
        <li class="menu__item">
            <a href="#">Русский</a>
        </li>
        <li class="menu__title"> <a href="#">Контакты</a>
        </li>
    </ul>
</div>
