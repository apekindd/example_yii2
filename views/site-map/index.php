<?php
$this->title = Yii::t('app','sitemap');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="section section_no-p">
        <div class="section__title section__title_left">
            <h1><?= Yii::t('app','sitemap') ?></h1>
        </div>
        <ul class="site-map">
            <li> <a href="/"><?=Yii::t('app','Головна');?></a></li>
            <ul>
                <?= $map ?>
        </ul>
    </div>
</div>
