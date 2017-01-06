<?php
use yii\helpers\Url;
$this->title = Yii::t('app', 'Іспити');

$this->params['breadcrumbs'][] = $this->title;
?>
<?php if ($this->beginCache($cache['key'],$cache['options'])) { ?>
<h1><?= Yii::t('app', 'Іспити');?></h1>
    <?php
    $this->endCache();
}
?>

