<?php


namespace app\controllers;


use app\models\Courses;
use app\models\Exams;
use app\models\Static_page;
use app\models\Trainings;

class SiteMapController extends AppController
{
    public function actionIndex(){

        $map = $this->createMap();
        return $this->render('index', compact('map'));
    }

    /**
     * Create site map
     * @return string
     */
    protected function createMap(){
        $map = [];
        $courses = $this->getTree(Courses::find()->asArray()->where(['!=', 'symbol', ''])->indexBy('id')->all(), 'courses');
        $map = array_merge($map, $courses);

        $tranings = $this->getTree(Trainings::find()->asArray()->where(['!=', 'symbol', ''])->indexBy('id')->all(), 'trainings');
        $map = array_merge($map, $tranings);

        $exams = $this->getTree(Exams::find()->asArray()->where(['!=', 'symbol', ''])->indexBy('id')->all(), 'exams');
        $map = array_merge($map, $exams);


        if(\Yii::$app->language == 'ru') {
            $title_lang = 'title_ru';
        } elseif (\Yii::$app->language == 'en') {
            $title_lang = 'title_en';
        }else{
            $title_lang = 'title';
        }

        $st = Static_page::find()->asArray()->where(['=', 'symbol', 'study'])->indexBy('id')->limit(1)->one();
        $study[$st[$title_lang]] = $st;
        $study[$st[$title_lang]]['controller'] = 'study';
        $study[$st[$title_lang]]['childs']  = $this->getTree(Static_page::find()->asArray()->where(['=', 'section', 'study'])->indexBy('id')->all(), 'study');
        $map = array_merge($map, $study);

        $ab = Static_page::find()->asArray()->where(['=', 'symbol', 'about'])->indexBy('id')->limit(1)->one();
        unset($ab['symbol']);
        $about[$ab[$title_lang]] = $ab;
        $about[$ab[$title_lang]]['controller'] = 'about';
        $about[$ab[$title_lang]]['childs']  = $this->getTree(Static_page::find()->asArray()->where(['=', 'section', 'about'])->indexBy('id')->all(), 'about');

        $about[$ab[$title_lang]]['childs'][\Yii::t('app','Акції')]['title']=\Yii::t('app','Акції');
        $about[$ab[$title_lang]]['childs'][\Yii::t('app','Акції')]['controller']='offers';

        $about[$ab[$title_lang]]['childs'][\Yii::t('app','Новини школи')]['title']=\Yii::t('app','Новини школи');
        $about[$ab[$title_lang]]['childs'][\Yii::t('app','Новини школи')]['controller']='news';

        $about[$ab[$title_lang]]['childs'][\Yii::t('app','Блог')]['title']=\Yii::t('app','Блог');
        $about[$ab[$title_lang]]['childs'][\Yii::t('app','Блог')]['controller']='blog';
        $map = array_merge($map, $about);

        //single pages
        $op = Static_page::find()->asArray()->indexBy('id')->all();
        foreach($op as $k=>$item){
            if($item['symbol'] == 'about' || $item['symbol'] == 'study' || $item['symbol'] == 'contacts' || $item['section'] != ''){
                unset($op[$k]);
            }else{
                $otherPages[$item[$title_lang]]=$item;
                $otherPages[$item[$title_lang]]['controller']='single';
            }
        }

        //$otherPages[$ab[$title_lang]]['controller'] = '';
        $map = array_merge($map, $otherPages);


        $ab = Static_page::find()->asArray()->where(['=', 'symbol', 'contacts'])->indexBy('id')->limit(1)->one();
        $contacts[$ab[$title_lang]] = $ab;
        $contacts[$ab[$title_lang]]['controller'] = 'about';
        $map = array_merge($map, $contacts);

        return $this->getMapHtml($map);
    }

    /**
     * Create tree array for site map
     * @param array $data
     * @return array
     */
    protected function getTree($data, $controller){
        $tree = [];
        foreach($data as $id=>&$node) {
            if(\Yii::$app->language == 'ru') {
                $title = $node['title_ru'];
            } elseif (\Yii::$app->language == 'en') {
                $title = $node['title_en'];
            }else{
                $title = $node['title'];
            }
            if(!$node['parent_id']){
                $tree[$title]= &$node;
                $tree[$title]['controller']= $controller;
            }else{
                $data[$node['parent_id']]['childs'][$title] = &$node;
                $data[$node['parent_id']]['childs'][$title]['controller'] = $controller;
            }
        }
        return $tree;
    }

    /**
     * Call method for create site map HTML in cycle
     * @param array $tree
     * @return string
     */
    protected function getMapHtml($tree){
        $str = '';
        foreach ($tree as $name=>$item) {
            $str .= $this->createMapHtml($item, $name);
        }
        return $str;
    }

    /**
     * Create site map HTML
     * @param array $item
     * @param string $name
     * @return string
     */
    protected function createMapHtml($item, $name){
        ob_start();?>
            <li><a href="<?= \yii\helpers\Url::to(["site/{$item['controller']}",'symbol'=>$item['symbol']]) ?>"><?=$name?></a></li>
             <?php if(isset($item['childs'])){ ?>
            <ul>
                <?=$this->getMapHtml($item['childs'])?>
            </ul>
              <?php } ?>
        <?php
        return ob_get_clean();
    }

}