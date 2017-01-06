<?php


namespace app\modules\admin\controllers;

use yii\base\Controller;
use Yii;

class CacheController extends Controller
{
    private $translate = [
        'mainpage'=>'Главная страница',
        'offers'=>'Акции',
        'news'=>'Новости',
        'footer'=>'Нижнее меню',
        'blog'=>'Блог',
        'static'=>'Статические страницы',
        'exams'=>'Экзамены',
        'trainings'=>'Тренинги',
        'courses'=>'Курсы',
    ];

    private function dbreq($code)
    {
        if ($code == 'offers') {
            return \app\models\Offers::find()->asArray()->all();
        }elseif($code == 'news'){
            return \app\models\News::find()->asArray()->all();
        }elseif($code == 'blog'){
            return \app\models\Blog::find()->asArray()->all();
        }elseif($code == 'static'){
            return \app\models\Static_page::find()->asArray()->all();
        }elseif($code == 'exams'){
            return \app\models\Exams::find()->asArray()->all();
        }elseif($code == 'trainings'){
            return \app\models\Trainings::find()->asArray()->all();
        }elseif($code == 'courses'){
            return \app\models\Courses::find()->asArray()->all();
        }
    }
    
    public function actionIndex(){

        if(Yii::$app->request->post('code')){
            $code = Yii::$app->request->post('code');
            if($code === 'clear_all'){
                Yii::$app->cache->flush();
                Yii::$app->session->setFlash('success', 'Весь кеш успешно удалён.');
                return Yii::$app->getResponse()->refresh();
            }
            foreach(Yii::$app->params['languages'] as $lang) {
                if(Yii::$app->params['cache'][$code]['db'] === 0){
                    $cache_key = $code ."_". $lang['url'];
                    $cKey = ['yii\widgets\FragmentCache', $cache_key];
                    Yii::$app->cache->delete($cKey);
                }else{
                    //delete list
                    $cache_key = $code ."_". $lang['url'];
                    $cKey = ['yii\widgets\FragmentCache', $cache_key];
                    Yii::$app->cache->delete($cKey);

                    //delete details
                    $result = $this->dbreq($code);
                    if(!empty($result)){
                        foreach ($result as $res) {
                            $cache_key = $code ."_".$res['id']."_". $lang['url'];
                            $cKey = ['yii\widgets\FragmentCache', $cache_key];
                            Yii::$app->cache->delete($cKey);
                        }
                    }
                }
            }
            Yii::$app->session->setFlash('success', 'Кеш для "' . $this->translate[$code] . '" успешно удален.');
            return Yii::$app->getResponse()->refresh();
        }
        $cacheArray = [];
        $translate = $this->translate;
        foreach(Yii::$app->params['languages'] as $lang){
            foreach(Yii::$app->params['cache'] as $code=>$cache){
                $cache_key = $code ."_". $lang['url'];
                $cKey = ['yii\widgets\FragmentCache', $cache_key];
                if(Yii::$app->cache->get($cKey)){
                    $cacheArray[$code]=$code;
                }
            }
        }


        return $this->render('index',compact('cacheArray','translate'));
    }
}