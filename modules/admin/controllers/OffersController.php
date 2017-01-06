<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Offers;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * OffersController implements the CRUD actions for Offers model.
 */
class OffersController extends Controller
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
     * Lists all Offers models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Offers::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Offers model.
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
     * Creates a new Offers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Offers();

        if ($model->load(Yii::$app->request->post())) {
            if($_POST['Offers']['type'] == '' || $_POST['Offers']['product_id'] == ''){
                $model->type = '';
                $model->product_id = '';
            }
            $model->image = UploadedFile::getInstance($model, 'image');
            $model->save();
            if ($model->image) {
                $model->upload();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Offers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
           // echo '<pre>';print_r(Yii::$app->request->post()); echo '</pre>';die();
            if($_POST['Offers']['type'] == '' || $_POST['Offers']['product_id'] == ''){
                $model->type = '';
                $model->product_id = '';
            }
            $model->image = UploadedFile::getInstance($model, 'image');
            $model->save();
            if ($model->image) {
                $model->upload();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Offers model.
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
     * Finds the Offers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Offers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Offers::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionDelimg($img)
    {
        $arr = explode("|", base64_decode($img));
        @unlink(Yii::getAlias("@webroot") .'/images/' . $arr[0]);
        $model = $this->findModel($arr[1]);
        $model->img = "";
        $model->save();
        return $this->redirect(['update', 'id' => $model->id]);
    }


}
