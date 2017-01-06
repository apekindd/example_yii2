<?php
namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class Opportunity extends ActiveRecord{

    public function afterFind()
    {
        if(Yii::$app->language == 'ru') {
            $this->title = $this->title_ru;

        } elseif (Yii::$app->language == 'en') {
            $this->title = $this->title_en;

        }
        return true;
    }
    
}