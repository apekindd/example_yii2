<?php
$this->title = $static_page->title;
?>

<?php
if($sub){
    $subs = explode('/', $sub);
    $this->params['breadcrumbs'][] = ['label'=>Yii::t('app', $subs[0]), 'url'=>[$subs[1]]];
    $this->params['breadcrumbs'][] = $static_page->title;
}else{
    $this->params['breadcrumbs'][] = ['label'=>$static_page->title];
}
?>
<?php if ($this->beginCache($cache['key'],$cache['options'])) { ?>
<div class="container">
    <div class="section section_no-p">
        <div class="section__title section__title_left">
            <h1><?=$static_page->title?></h1>
        </div>
        <div class="section__text section__text_slim">
            <?=$static_page->text?>
        </div>


        <? if(isset($teachers)) echo $this->render('_teachers',['teachers'=>$teachers]); ?>
        <? if(isset($contacts)) echo $this->render('_contacts',['contacts'=>$contacts]); ?>
        <?= $this->render('_tables',['tables'=>$static_page->table]);?>
    </div>
</div>

    <?php
    $this->endCache();
}
if ($this->beginCache('static_'.Yii::$app->language,$cache['options'])) {
     echo '<div style="display:none;"></div>';
    $this->endCache();
}
?>

