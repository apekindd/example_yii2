<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "trainings".
 *
 * @property integer $id
 * @property string $title
 * @property string $anons
 * @property string $text
 * @property string $date
 * @property string $keywords
 * @property string $description
 * @property string $rightcol
 * @property string $price
 * @property integer $parent_id
 * @property string $backgroundimg
 * @property string $img
 * @property integer $show_detail
 * @property string $symbol
 * @property string $title_ru
 * @property string $title_en
 * @property string $anons_ru
 * @property string $anons_en
 * @property string $text_ru
 * @property string $text_en
 * @property string $date_ru
 * @property string $date_en
 * @property string $keywords_ru
 * @property string $keywords_en
 * @property string $description_ru
 * @property string $description_en
 * @property string $rightcol_ru
 * @property string $rightcol_en
 */
class Trainings extends \yii\db\ActiveRecord
{
    public $bg;

    public $image;
    public $imageAlt;
    public $imageTitle;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trainings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image'], 'file', 'extensions' => 'png, jpg'],
            [['imageAlt','imageTitle'], 'string'],
            [['bg'], 'file', 'extensions' => 'png, jpg'],
            [['title' ], 'required'],
            [['text', 'date', 'anons', 'anons_ru', 'anons_en', 'rightcol', 'rightcol_ru', 'rightcol_en'], 'string'],
            [['parent_id', 'show_detail', 'sort'], 'integer'],
            [['title'], 'string', 'max' => 254],
            [['keywords', 'description', 'backgroundimg', 'symbol', 'title_ru', 'title_en',  'date_ru', 'date_en', 'keywords_ru', 'keywords_en', 'description_ru', 'description_en'], 'string', 'max' => 255],
            [['price'], 'string', 'max' => 10],
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
            'anons' => 'Анонс',
            'text' => 'Текст',
            'date' => 'Дата',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'rightcol' => 'Правая колонка',
            'price' => 'Цена',
            'parent_id' => 'Родительский тренинг',
            'backgroundimg' => 'Backgroundimg',
            'img' => 'Картинка',
            'show_detail' => 'Показывать детальную страницу',
            'symbol' => 'Символьный код',
            'title_ru' => 'Заголовок Ru',
            'title_en' => 'Заголовок En',
            'anons_ru' => 'Анонс Ru',
            'anons_en' => 'Анонс En',
            'text_ru' => 'Текст Ru',
            'text_en' => 'Текст En',
            'date_ru' => 'Дата Ru',
            'date_en' => 'Дата En',
            'keywords_ru' => 'Keywords Ru',
            'keywords_en' => 'Keywords En',
            'description_ru' => 'Description Ru',
            'description_en' => 'Description En',
            'rightcol_ru' => 'Правая колонка Ru',
            'rightcol_en' => 'Правая колонка En',
            'sort' => 'Сортировка',
            'bg' => 'Фоновая картинка',
            'image' => 'Картинка',
            'imageAlt' => 'Картинка Alt',
            'imageTitle' => 'Картинка Title',
        ];
    }

    public function getTrainings(){
        return $this->hasOne(Trainings::className(), ['id'=>'parent_id']);
    }

    public function beforeSave($insert)
    {
        if($this->bg){
            $this->backgroundimg = $this->bg->baseName . '.' . $this->bg->extension;
        }

        if($this->image){
            $imgName = $this->image->baseName . '.' . $this->image->extension;
            $arr = [
                'img' => $imgName,
                'alt' => $this->imageAlt,
                'title' => $this->imageTitle,
            ];
            $this->img = json_encode($arr);
        }else{
            $arr = [
                'img' => $this->img,
                'alt' => $this->imageAlt,
                'title' => $this->imageTitle,
            ];
            $this->img = json_encode($arr);
        }
        //print_r($this->img);
        return parent::beforeSave($insert);
    }

    public function afterFind()
    {
        $arr = json_decode($this->img);
        $this->img = $arr->img;
        $this->imageAlt = $arr->alt;
        $this->imageTitle = $arr->title;

        parent::afterFind(); 
    }
    

    public function upload1()
    {
        if ($this->validate()) {
            $this->image->saveAs(Yii::getAlias("@webroot").'/images/' . $this->image->baseName . '.' . $this->image->extension);
            return true;
        } else {
            return false;
        }
    }

}
