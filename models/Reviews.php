<?php
namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class Reviews extends ActiveRecord{
    public $image;
    public $imageAlt;
    public $imageTitle;
    public function afterFind()
    {
        if(Yii::$app->language == 'ru') {
            $this->name = $this->name_ru;
            $this->text = $this->text_ru;
        } elseif (Yii::$app->language == 'en') {
            $this->name = $this->name_en;
            $this->text = $this->text_en;
        }
        $arr = json_decode($this->img);
        $this->img = $arr->img;
        $this->imageAlt = $arr->alt;
        $this->imageTitle = $arr->title;
        return true;
    }
    
}