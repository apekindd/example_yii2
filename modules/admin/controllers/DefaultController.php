<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }
    

    public function actions()
    {
        return [
            'image-upload' => [
                'class' => 'vova07\imperavi\actions\UploadAction',
                'url' => '/images/', // Directory URL address, where files are stored.
                'path' => '@webroot/images' // Or absolute path to directory where files are stored.
            ],
        ];
    }
}
