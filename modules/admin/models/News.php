<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property integer $date
 * @property string $img
 * @property string $title_ru
 * @property string $title_en
 * @property string $text_ru
 * @property string $text_en
 * @property string $keywords
 * @property string $keywords_ru
 * @property string $keywords_en
 * @property string $description
 * @property string $description_ru
 * @property string $description_en
 * @property string $prev_img
 */
class News extends ActiveRecord
{

    public $imageFiles;
    public $imageFilesAlt;
    public $imageFilesTitle;

    public $image;
    public $imageAlt;
    public $imageTitle;




    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
                [['imageFiles'], 'file', 'extensions' => 'png, jpg','maxFiles' => 40],
                [['imageFilesAlt','imageFilesTitle'], 'string'],
                [['image'], 'file', 'extensions' => 'png, jpg'],
                [['imageAlt','imageTitle'], 'string'],
                [['date'], 'safe'],
                [['title','text'], 'required'],
                [['text','text_ru','text_en'], 'string'],
                [['title', 'prev_img', 'title_ru', 'title_en', 'keywords', 'keywords_ru', 'keywords_en', 'description', 'description_ru', 'description_en'], 'string', 'max' => 255],
            ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'text' => 'Текст',
            'date' => 'Дата',
            'img' => 'Изображение',
            'title_ru' => 'Заголовок Ru',
            'title_en' => 'Заголовок En',
            'text_ru' => 'Текст Ru',
            'text_en' => 'Текст En',
            'keywords' => 'Ключевые слова',
            'keywords_ru' => 'Ключевые слова Ru',
            'keywords_en' => 'Ключевые слова En',
            'description' => 'Описание',
            'description_ru' => 'Описание Ru',
            'description_en' => 'Описание En',
            'prev_img' => 'Изобр. превью',
            'imageFiles' => 'Галлерея',
            'imageFilesAlt' => 'Галлерея Alt',
            'imageFilesTitle' => 'Галлерея Title',
            'image' => 'Картинка',
            'imageAlt' => 'Картинка Alt',
            'imageTitle' => 'Картинка Title',
        ];
    }

    public function beforeSave($insert)
    {

        $this->date = strtotime($this->date);
        if($this->imageFiles){
            $arr = [];
            foreach ($this->imageFiles as $file) {
                $imgName = $file->baseName . '.' . $file->extension;
                $arr[] = [
                    'img' => $imgName,
                    'alt' => $this->imageFilesAlt,
                    'title' => $this->imageFilesTitle,
                ];
            }
            $this->img = json_encode($arr);
        }else{
            foreach ($this->img as $k=>$item) {
                $this->img[$k]->alt = $this->imageFilesAlt;
                $this->img[$k]->title = $this->imageFilesTitle;
            }
            $this->img = json_encode($this->img);
        }
        
        if($this->image){
            $imgName = $this->image->baseName . '.' . $this->image->extension;
            $arr = [
                'img' => $imgName,
                'alt' => $this->imageAlt,
                'title' => $this->imageTitle,
            ];
            $this->prev_img = json_encode($arr);
        }else{
            $arr = [
                'img' => $this->prev_img,
                'alt' => $this->imageAlt,
                'title' => $this->imageTitle,
            ];
            $this->prev_img = json_encode($arr);
        }
        //print_r($this->img);
        return parent::beforeSave($insert);
    }
    public function afterFind()
    {
        $arr = json_decode($this->img);
        $this->img = $arr;
        $this->imageFilesAlt = $arr[0]->alt;
        $this->imageFilesTitle = $arr[0]->title;

        $arr = json_decode($this->prev_img);
        $this->prev_img = $arr->img;
        $this->imageAlt = $arr->alt;
        $this->imageTitle = $arr->title;
        parent::afterFind(); // TODO: Change the autogenerated stub
    }
    public function upload()
    {
        if ($this->validate()) {
            foreach ($this->imageFiles as $file) {
                $file->saveAs(Yii::getAlias("@webroot").'/images/' . $file->baseName . '.' . $file->extension);
            }
            return true;
        } else {
            return false;
        }
    }
    public function uploadOne()
    {
        if ($this->validate()) {
            $this->image->saveAs(Yii::getAlias("@webroot").'/images/' . $this->image->baseName . '.' . $this->image->extension);
            return true;
        } else {
            return false;
        }
    }
}
