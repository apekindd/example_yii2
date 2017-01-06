<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\QuestionAnswer;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * QuestionAnswerController implements the CRUD actions for QuestionAnswer model.
 */
class QuestionAnswerController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all QuestionAnswer models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => QuestionAnswer::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single QuestionAnswer model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new QuestionAnswer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new QuestionAnswer();

        if ($model->load(Yii::$app->request->post())) {
            $answers = Yii::$app->request->post('answer');
            $itIsAnswer = Yii::$app->request->post('it_is_answer');
            $arAnswer = [];
            $correct = false;
            foreach($answers as $id=>$item){
                if($item == '') continue;
                if($itIsAnswer[$id] == 'on'){
                    $correct = true;
                }
                $arAnswer[$id]['text']=base64_encode($item);
                $arAnswer[$id]['answer']=($itIsAnswer[$id] == 'on') ? 'Y' : 'N';
            }

            if(empty($model->test)){
                Yii::$app->session->setFlash('error','Выберите тест');
                return $this->redirect(Yii::$app->request->referrer);
            }else{
                $imp = implode('|',$model->test);
                $model->test = '|';
                $model->test .= $imp."|";
            }
            if(empty($arAnswer)){
                Yii::$app->session->setFlash('error','Заполните поля ответов');
                return $this->redirect(Yii::$app->request->referrer);
            }else{
                $model->answer = serialize($arAnswer);
            }

            if(!$correct){
                Yii::$app->session->setFlash('error','Вы не выбрали правильный вариант ответа');
                return $this->redirect(Yii::$app->request->referrer);
            }

            if($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing QuestionAnswer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $answers = Yii::$app->request->post('answer');
            $itIsAnswer = Yii::$app->request->post('it_is_answer');
            $arAnswer = [];
            $correct = false;
            foreach($answers as $id=>$item){
                if($item == '') continue;
                if($itIsAnswer[$id] == 'on'){
                    $correct = true;
                }
                $arAnswer[$id]['text']=base64_encode($item);
                $arAnswer[$id]['answer']=($itIsAnswer[$id] == 'on') ? 'Y' : 'N';
            }

            if(empty($model->test)){
                Yii::$app->session->setFlash('error','Выберите тест');
                return $this->redirect(Yii::$app->request->referrer);
            }else{
                $imp = implode('|',$model->test);
                $model->test = '|';
                $model->test .= $imp."|";
            }

            if(empty($arAnswer)){
                Yii::$app->session->setFlash('error','Заполните поля ответов');
                return $this->redirect(Yii::$app->request->referrer);
            }else{
                $model->answer = serialize($arAnswer);
            }

            if(!$correct){
                Yii::$app->session->setFlash('error','Вы не выбрали правильный вариант ответа');
                return $this->redirect(Yii::$app->request->referrer);
            }

            if($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing QuestionAnswer model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the QuestionAnswer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return QuestionAnswer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = QuestionAnswer::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
