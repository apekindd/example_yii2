<?php


namespace app\controllers;


use yii\web\Controller;
use Yii;

class MailerController extends Controller
{
    public function actionSend(){
        //Контроллер для примера отправки
        $test = [
            '1' => [
                'name'  => 'test1213',
                'qty'   => '1',
                'price' => '50'
            ],
        ];
        Yii::$app->mailer->compose('test', compact('test'))
            ->setFrom([Yii::$app->params['adminEmail']=>Yii::$app->params['fromName']])
            ->setTo('apekin@uamaster.com')
            ->setSubject('test')
            ->send();
        echo 'send';
    }

}