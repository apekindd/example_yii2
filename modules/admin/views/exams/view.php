<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Exams */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Экзамены', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exams-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Точно удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            [
                'attribute'=>'exam_id',
                'value'=>getExamLink($model),
                'format'=>'html'
            ],
            'anons:html',
            'keywords',
            'description',
            'price',
            //'parent_id',
            [
                'attribute' => 'parent_id',
                'value' => !$model->parent_id ? "-" : "(<a href='".\yii\helpers\Url::to(['exams/view', 'id'=>$model->parent_id])."'>".$model->parent_id."</a>)".$model->categories[$model->parent_id],
                'format' => 'html'
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
            'symbol',
            'anons_ru:html',
            'anons_en:html',
            'title_ru:html',
            'title_en:html',
            'keywords_ru:ntext',
            'keywords_en:ntext',
            'description_ru:ntext',
            'description_en:ntext',
        ],
    ]) ?>

</div>
    </div>
<?php
function getExamLink($model){
    if($model->exam_id){
        $exam_t = \app\models\ExamItem::findOne($model->exam_id);
        return "<a href='".\yii\helpers\Url::to(['exam-item/view','id'=>$exam_t->id])."'>".$exam_t->name."</a>";
    }else{
        return "-";
    }
}
?>