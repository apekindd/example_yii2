<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Levels */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Программы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="levels-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'left_column:html',
            'left_column_ru:html',
            'left_column_en:html',
            'text:html',
            'text_ru:html',
            'text_en:html',
            [
                'attribute' => 'page',
                'value'=> call_user_func(function ($data) {
                    $str = "";
                    foreach (\app\modules\admin\models\Levels::getPages() as $key => $page) {
                        if(in_array($key, $data->page)) $str .= "<p>- {$page}</p>";
                    }
                    return $str;
                }, $model),
                'format' => 'html'
            ],
        ],
    ]) ?>

</div>
