<?php
$this->title = $course->title;

$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Курси'), 'url'=>['courses']];
$this->params['breadcrumbs'][] = $course->title;
?>
<?php if ($this->beginCache($cache['key'],$cache['options'])) { ?>
    <h1><?=$course->title?></h1>
    <p><?=$course->text?></p>

<? foreach ($friday as $item):?>
    <div style="float:left">
        <div style="width: 150px; float:left">
            <h1><?=$item->title?></h1>
            <p><?=$item->anons?></p>
        </div>
        <div style="width: 400px; float:left">
            <p><?=$item->text?></p>
        </div>
    </div>
<? endforeach;?>
<?php
$this->endCache();
}
if ($this->beginCache('courses_'.Yii::$app->language,$cache['options'])) {
    echo '<div style="display:none;"></div>';
    $this->endCache();
}
?>
