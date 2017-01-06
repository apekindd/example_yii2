<?php

namespace app\components;

use app\models\Footer;
use Yii;
use yii\base\Widget;

class FooterWidget extends Widget{
    
    public $lang;
    
    public function init()
    {
        $this->lang = Yii::$app->language=='ua'?"":"/".Yii::$app->language;
    }

    public function run()
    {
        //cache prepare
        $cache_key = 'footer_'. Yii::$app->language;
        $k = explode('_', $cache_key);
        $cache = [
            'key'=>$cache_key,
            'options' => [
                'duration' => Yii::$app->params['cache'][$k[0]]['time'],
            ]
        ];
        $cKey = ['yii\widgets\FragmentCache', $cache_key];

        if(!Yii::$app->cache->get($cKey)) {
            $courses = Footer::find()->orderBy(['sort' => SORT_ASC])->where('section="courses"')->all();
            $trainings = Footer::find()->orderBy(['sort' => SORT_ASC])->where('section="trainings"')->all();
            $exams = Footer::find()->orderBy(['sort' => SORT_ASC])->where('section="exams"')->all();
            $about = Footer::find()->orderBy(['sort' => SORT_ASC])->where('section="about"')->all();
            $study = Footer::find()->orderBy(['sort' => SORT_ASC])->where('section="study"')->all();
            $menu = $this->getTemplate($courses,$trainings,$exams,$about,$study);
        }
        return $this->render('footer', ['menu'=>$menu, 'cache'=>$cache]);
    }

    protected function getTemplate($courses,$trainings,$exams,$about,$study){
        ob_start();
        include __DIR__ . '/template.php';
        return ob_get_clean();
    }
}