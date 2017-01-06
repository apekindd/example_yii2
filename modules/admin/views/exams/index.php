<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
\Yii::$app->language = 'ru-RU';
$this->title = 'Экзамены';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exams-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            //'anons:ntext',
            //'keywords',
            //'description',
            // 'leftcol',
            // 'price',
             //'parent_id',
            [
                'attribute' => 'parent_id',
                'value' => function($data){
                    if($data->parent_id == 0){
                        return "-";
                    }else{
                        return "<a href='".\yii\helpers\Url::to(['exams/view', 'id'=>$data->parent_id])."'>".$data->getParentName($data)."</a>";
                    }
                },
                'format' => 'html'
            ],
            [
                'attribute'=>'exam_id',
                'value'=>function($model){
                    return getExamLink($model);
                },
                'format'=>'html'
            ],
            // 'backgroundimg',
            // 'img',
             'symbol',
            // 'leftcol_ru:ntext',
            // 'leftcol_en:ntext',
            // 'anons_ru:ntext',
            // 'anons_en:ntext',
            // 'title_ru:ntext',
            // 'title_en:ntext',
            // 'keywords_ru:ntext',
            // 'keywords_en:ntext',
            // 'description_ru:ntext',
            // 'description_en:ntext',

            ['class' => 'yii\grid\ActionColumn',
                'template'=>'{view}{update}{delete}{page}',
                'buttons'=>[
                    'page' => function ($url, $model) {
                        if($model->symbol != ''){
                            $link = "/exams/".$model->symbol;
                            return Html::a('<span class="glyphicon glyphicon-globe"></span>', $link, [
                                'title' => Yii::t('yii', 'Show page'),
                            ]);
                        }
                    }
                ]
            ],
        ],
    ]); ?>
</div>
<?php
function getExamLink($model){
    if($model->exam_id){
       $exam = \app\models\ExamItem::findOne($model->exam_id);
        return "<a href='".\yii\helpers\Url::to(['exam-item/view','id'=>$exam->id])."'>".$exam->name."</a>";
    }else{
        return "-";
    }
}
?>
