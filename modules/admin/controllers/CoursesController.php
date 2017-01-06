<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Courses;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * CoursesController implements the CRUD actions for Courses model.
 */
class CoursesController extends Controller
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
     * Lists all Courses models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Courses::find()->with('courses'),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Courses model.
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
     * Creates a new Courses model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Courses();

        if ($model->load(Yii::$app->request->post()) ) {
            $model->bg = UploadedFile::getInstance($model, 'bg');
            $model->image = UploadedFile::getInstances($model, 'image');
            $model->save();
            if ($model->bg) {
                $model->upload();
            }
            if ($model->image) {
                $model->upload1();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Courses model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) ) {
            if(!empty($model->table)) {
                $model->table = implode('|', $model->table);
            }
            $model->bg = UploadedFile::getInstance($model, 'bg');
            $model->image = UploadedFile::getInstance($model, 'image');
            $model->save();
            if ($model->bg) {
                $model->upload();
            }
            if ($model->image) {
                $model->upload1();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Courses model.
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
     * Finds the Courses model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Courses the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Courses::findOne($id)) !== null) {
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
    public function actionDelimgbg($img)
    {
        $arr = explode("|", base64_decode($img));
        @unlink(Yii::getAlias("@webroot") .'/images/' . $arr[0]);
        $model = $this->findModel($arr[1]);
        $model->backgroundimg = "";
        $model->save();
        return $this->redirect(['update', 'id' => $model->id]);
    }
}
