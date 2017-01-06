<?php
namespace app\models;

use yii\db\ActiveRecord;
use Yii;


class Courses extends ActiveRecord{
    public $image;
    public $imageAlt;
    public $imageTitle;
    public $nameEsputnik;
    
    public function afterFind()
    {
        $this->nameEsputnik = $this->title;
        if(Yii::$app->language == 'ru') {
            $this->title = $this->title_ru;
            $this->anons = $this->anons_ru;
            $this->text = $this->text_ru;
            $this->keywords = $this->keywords_ru;
            $this->description = $this->description_ru;
            $this->leftcol = $this->leftcol_ru;

        } elseif (Yii::$app->language == 'en') {
            $this->title = $this->title_en;
            $this->anons = $this->anons_en;
            $this->text = $this->text_en;
            $this->keywords = $this->keywords_en;
            $this->description = $this->description_en;
            $this->leftcol = $this->leftcol_en;
        }

        $arr = json_decode($this->img);
        $this->img = $arr->img;
        $this->imageAlt = $arr->alt;
        $this->imageTitle = $arr->title;

        if($this->table != "") {
            $ids = str_replace("|",",",$this->table);
            $this->table = Tables::find()->where("id IN ({$ids})")->all();
        }
        
        return true;
    }
}