<?php

namespace app\components;

use app\models\Footer;
use app\models\Headermenu;
use Yii;
use yii\base\Widget;

class HeaderWidget extends Widget{
    
    public $lang;
    public $langPrefix;
    public $data;
    public $menuHtml;
    public $tree;

    public function init()
    {
        $this->lang = Yii::$app->language=='ua'?"":"/".Yii::$app->language;
        $this->langPrefix = strtolower(Yii::$app->language);
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
            $this->data = Headermenu::find()->asArray()->indexBy('id')->orderBy(['sort'=>SORT_DESC])->all();
            $this->tree = $this->getTree();
            $this->menuHtml = $this->getMenuHtml($this->tree);
        }
        return $this->menuHtml;
    }
    protected function getTree(){
        $tree = [];
        foreach($this->data as $id=>&$node) {
            if(!$node['parent_id']){
                $tree[$id]= &$node;
            }else{
                $this->data[$node['parent_id']]['childs'][$node['id']] = &$node;
            }
        }
        return $tree;
    }

    protected function getMenuHtml($tree){
        ob_start();
        include(__DIR__ . '/header_template.php');
        return ob_get_clean();
    }
}