<?php

namespace app\modules\admin\models;

use app\models\Trainings;
use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property integer $id
 * @property string $page
 * @property string $name
 * @property string $img
 * @property string $name_ru
 * @property string $name_en
 * @property string $text
 * @property string $text_ru
 * @property string $text_en
 * @property string $video
 */
class Reviews extends Imgmodel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            $this->rule,
            $this->rule2,
            [['page'], 'safe'],
            [['page'], 'required'],
            [['text', 'text_ru', 'text_en', 'video'], 'string'],
            [['name', 'img', 'name_ru','text_ru', 'name_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page' => 'Страницы, где показывается отзыв',
            'name' => 'Имя',
            'img' => 'Изображение',
            'image' => 'Изображение',
            'imageAlt' => 'Изображение Alt',
            'imageTitle' => 'Изображение Title',
            'name_ru' => 'Имя Ru',
            'name_en' => 'Имя En',
            'text' => 'Текст',
            'text_ru' => 'Текст Ru',
            'text_en' => 'Текст En',
            'video' => 'Видеоотзыв',
        ];
    }

    public function afterFind()
    {
        if(strlen($this->page)>1){
            $arr = explode("|", $this->page);
            unset($arr[0]);
            unset($arr[count($arr)]);
            $this->page = $arr;
        }
        parent::afterFind(); // TODO: Change the autogenerated stub
    }

    public function beforeSave($insert)
    {
        //echo "<pre>"; print_r($this->page);
        $this->page = "|" . implode("|", $this->page) . "|" ;
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }

    public static function getPages(){
        $coures = Courses::find()->where("parent_id=0")->all();
        $trenings = Trainings::find()->where("parent_id=0")->all();
        
        foreach ($coures as $item) {
            $item->id = "c".$item->id ;
        }
        foreach ($trenings as $item) {
            $item->id = "t".$item->id ;
        }
        $arrCourses = \yii\helpers\ArrayHelper::map($coures, 'id', 'title');
        $arrTrenings  = \yii\helpers\ArrayHelper::map($trenings, 'id', 'title');

        return array_merge($arrCourses,$arrTrenings);
    }
}
