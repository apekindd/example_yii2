<?php
namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class Contacts extends ActiveRecord{
    public $nameEsputnik;

    public function afterFind()
    {
        $this->nameEsputnik = $this->name;
        if(Yii::$app->language == 'ru') {
            $this->name = $this->name_ru;
            $this->text = $this->text_ru;
            $this->schedule = $this->schedule_ru;
            $this->extra_name = $this->extra_name_ru;

        } elseif (Yii::$app->language == 'en') {
            $this->name = $this->name_en;
            $this->text = $this->text_en;
            $this->schedule = $this->schedule_en;
            $this->extra_name = $this->extra_name_en;
        }
        return true;
    }
}