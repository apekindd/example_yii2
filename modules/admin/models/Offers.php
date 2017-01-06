<?php

namespace app\modules\admin\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "offers".
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
 * @property integer $important
 */
class Offers extends Imgmodel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'offers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            $this->rule,
            $this->rule2,
            [['date'], 'safe'],
            [['important', 'product_id'], 'integer'],
            [['title','text'], 'required'],
            [['text','text_ru','text_en', 'type'], 'string'],
            [['title', 'title_ru', 'title_en', 'keywords', 'keywords_ru', 'keywords_en', 'description', 'description_ru', 'description_en', 'img','type'], 'string', 'max' => 255],

        ];
    }

    public function getProducts(){
        $arProduct = [];
        $arProduct['courses'] =  ArrayHelper::map(Courses::find()->where(['!=','title',''])->andWhere(['!=','symbol',''])->asArray()->orderBy('id')->all(),'id','title');
        $arProduct['exams'] = ArrayHelper::map(Exams::find()->where(['!=','title',''])->andWhere(['!=','symbol',''])->asArray()->orderBy('id')->all(),'id','title');
        $arProduct['trainings'] = ArrayHelper::map(Trainings::find()->where(['!=','title',''])->andWhere(['!=','symbol',''])->asArray()->orderBy('id')->all(),'id','title');
        return $arProduct;
    }

    public function getProduct($type, $id){
        if($type != ''){
            if($type == 'courses'){
                $i = Courses::findOne($id);
                return $i;
            }elseif($type == 'exams'){
                $i = Exams::findOne($id);
                return $i;
            }elseif($type == 'trainings'){
                $i = Trainings::findOne($id);
                return $i;
            }
        }else{
            return '';
        }
        return '';
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
            'image' => 'Изображение',
            'imageAlt' => 'Изображение Alt',
            'imageTitle' => 'Изображение Title',
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
            'important' => 'Отображать на страницах',
            'type' => 'Тип продукта',
            'product_id' => 'Продукт',
        ];
    }
    public function beforeSave($insert)
    {
        if($this->date == ''){
            $this->date = time();
        }else {
            $this->date = strtotime($this->date);
        }
        return parent::beforeSave($insert);
    }
}
