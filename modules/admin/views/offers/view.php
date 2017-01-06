<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Offers */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Offers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="offers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            //'type',
            //'product_id',

            [
                'attribute' => 'type',
                'value'     => Yii::$app->params['offerProducts'][$model->type],
            ],
            [
                'attribute' => 'product_id',
                'value'     => (is_object($obj = $model->getProduct($model->type, $model->product_id))) ?
                    "<a href='".\yii\helpers\Url::to(["/admin/{$model->type}/view", 'id'=> $obj->id])."'>{$obj->title}</a>" : '-',
                'format'    => 'html'
            ],
            'text:html',
            //'date',
            [
                'attribute' => 'date',
                'value'     => date('d.m.Y', $model->date)
            ],
            [
                'attribute' => 'img',
                'value' => call_user_func(function($data){
                    if(!empty($data->img))
                        return '<img src="/images/'.$data->img.'" alt="" style="max-width:250px">';
                    else
                        return '';
                },$model),
                'format' => 'raw'
            ],
            'title_ru',
            'title_en',
            'text_ru:html',
            'text_en:html',
            'keywords',
            'keywords_ru',
            'keywords_en',
            'description',
            'description_ru',
            'description_en',
            //'important',
            [
                'attribute' => 'important',
                'value' => !$model->important ? 'Нет' : 'Да',
            ],
        ],
    ]) ?>

</div>
