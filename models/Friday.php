<?php
namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class Friday extends ActiveRecord{

    public function afterFind()
    {
        if(Yii::$app->language == 'ru') {
            $this->anons = $this->anons_ru;
            $this->text = $this->text_ru;
        } elseif (Yii::$app->language == 'en') {
            $this->anons = $this->anons_en;
            $this->text = $this->text_en;
        }
        return true;
    }
    
}