<?php
$this->title = $about->title;


if($sub){
    $this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Про компанію'), 'url'=>['about']];
    $this->params['breadcrumbs'][] = $about->title;
}else{
    $this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Про компанію')];
}

//echo '<pre>';print_r($about); echo '</pre>';
?>
    <h1><?=$about->title?></h1>
    <p><?=$about->text?></p>

