<?php

namespace app\controllers;
use yii\web\Controller;
use Yii;

class AppController extends Controller
{
    public $groupsId = [
        "vzroslye" => [
            'c2'    => 'Site_vzroslye_obshchij',
            'c3'    => 'Site_vzroslye_delovoj',
            'c4'    => 'Site_vzroslye_podgotovka_ehkzamen',
            'c5'    => 'Site_vzroslye_razgovornyj_subbota',
            'c1000' => 'Site_vzroslye_drugoe',
        ],
        "deti" => [
            'c11' => 'Site_deti_obshchij',
            'c50' => 'Site_deti_podgotovka_ehkzamen',
            'c51' => 'Site_deti_po_pyatnicam',
            'c52' => 'Site_deti_podgotovka_zno',
            'c53' => 'Site_deti_kanikuly_v gorode',
            'c54' => 'Site_deti_Young_Travelers',
            'c55' => 'Site_deti_Games_Songs',
            'c1000' => 'Site_deti_drugoe',
        ],
        "teachers" => [
            't12' => 'Site_teachers_Modular_Courses',
            't1000' => 'Site_teachers_drugoe',
        ],
        "exam" => [
            'e1000' => 'Site_exam_drugoe',
        ],
    ];

    protected function getGroupsId($symbol,$id, $cat)
    {
        if(key_exists($symbol.$id,$this->groupsId[$cat])){
            return $this->groupsId[$cat][$symbol.$id];
        }
        return $this->groupsId[$cat]['c1000'];
    }

    protected function setMeta($keywords=null, $description=null, $title=null){
        $this->view->title = $title;
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>"$keywords"]);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>"$description"]);
    }

    protected function getForm($name, $arr)
    {
        ob_start();
            include Yii::getAlias("@app") . "/forms/{$name}.php";
        return ob_get_clean();
    }
}