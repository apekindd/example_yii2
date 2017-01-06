<?php
namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class Mainpage extends ActiveRecord{
    public function afterFind()
    {
        if(Yii::$app->language == 'ru') {
            $this->title = $this->title_ru;
            $this->keywords = $this->keywords_ru;
            $this->description = $this->description_ru;
        } elseif (Yii::$app->language == 'en') {
            $this->title = $this->title_en;
            $this->keywords = $this->keywords_en;
            $this->description = $this->description_en;
        }
        return true;
    }
}