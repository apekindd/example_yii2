<?php
namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class News extends ActiveRecord{

    public $imageFiles;
    public $imageFilesAlt;
    public $imageFilesTitle;

    public $image;
    public $imageAlt;
    public $imageTitle;
    
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

        $arr = json_decode($this->img);
        $this->img = $arr;
        $this->imageFilesAlt = $arr[0]->alt;
        $this->imageFilesTitle = $arr[0]->title;

        $arr = json_decode($this->prev_img);
        $this->prev_img = $arr->img;
        $this->imageAlt = $arr->alt;
        $this->imageTitle = $arr->title;
        return true;
    }
    
}