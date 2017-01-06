<?php
namespace app\models;

use yii\db\ActiveRecord;
use Yii;


class Exams extends ActiveRecord{
    public $image;
    public $imageAlt;
    public $imageTitle;

    public function afterFind()
    {
        if(Yii::$app->language == 'ru') {
            $this->title = $this->title_ru;
            $this->bottom_text = $this->bottom_text_ru;
            $this->anons = $this->anons_ru;
            $this->keywords = $this->keywords_ru;
            $this->description = $this->description_ru;
            $this->level_text = $this->level_text_ru;

        } elseif (Yii::$app->language == 'en') {
            $this->title = $this->title_en;
            $this->bottom_text = $this->bottom_text_en;
            $this->anons = $this->anons_en;
            $this->keywords = $this->keywords_en;
            $this->description = $this->description_en;
            $this->level_text = $this->level_text_en;
        }
        $arr = json_decode($this->img);
        $this->img = $arr->img;
        $this->imageAlt = $arr->alt;
        $this->imageTitle = $arr->title;
        return true;
    }
}