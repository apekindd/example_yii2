<?php
namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class Levels extends ActiveRecord{

    public function afterFind()
    {
        if(Yii::$app->language == 'ru') {
            $this->left_column = $this->left_column_ru;
            $this->text = $this->text_ru;
            $this->period = $this->period_ru;
        } elseif (Yii::$app->language == 'en') {
            $this->left_column = $this->left_column_en;
            $this->text = $this->text_en;
            $this->period = $this->period_en;
        }
        return true;
    }
    
}