<?php


namespace app\modules\admin\models;

use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

class AppModel extends ActiveRecord
{
    public function getTables(){
        $array = Tables::find()->asArray()->all();
        return ArrayHelper::map($array, 'id','title');
    }

    public function getTableNames($str){
        if($str == ''){
            return '';
        }
        $array = Tables::find()->asArray()->all();
        $arTable = ArrayHelper::map($array, 'id','title');
        $courseTables = explode('|',$str);
        $result = [];
        foreach($courseTables as $table){
            $result[]="<a target='_blank' href='".Url::to(['/admin/tables/view','id'=>$table])."'>". $arTable[$table]."</a>";
        }
        return implode(', ',$result);
    }
}