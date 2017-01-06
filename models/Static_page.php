<?php
namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class Static_page extends ActiveRecord{
    public function afterFind()
    {
        if(Yii::$app->language == 'ru') {
            $this->title = $this->title_ru;
            $this->text = $this->text_ru;
            $this->keywords = $this->keywords_ru;
            $this->description = $this->description_ru;

        } elseif (Yii::$app->language == 'en') {
            $this->title = $this->title_en;
            $this->text = $this->text_en;
            $this->keywords = $this->keywords_en;
            $this->description = $this->description_en;
        }
        if($this->table != "") {
            $ids = str_replace("|",",",$this->table);
            $this->table = Tables::find()->where("id IN ({$ids})")->all();
        }
        return true;
    }
}