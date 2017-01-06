<?php

namespace app\modules\admin\models;

use app\models\ExamItem;
use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "exams".
 *
 * @property integer $id
 * @property string $title
 * @property string $anons
 * @property string $keywords
 * @property string $description
 * @property string $level_text
 * @property string $level
 * @property string $abbr_text
 * @property string $abbr
 * @property string $price
 * @property integer $parent_id
 * @property string $img
 * @property string $symbol
 * @property string $bottom_text
 * @property string $bottom_text_ru
 * @property string $bottom_text_en
 * @property string $level_text_ru
 * @property string $level_text_en
 * @property string $anons_ru
 * @property string $anons_en
 * @property string $title_ru
 * @property string $title_en
 * @property string $keywords_ru
 * @property string $keywords_en
 * @property string $description_ru
 * @property string $description_en
 */
class Exams extends Imgmodel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'exams';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            $this->rule,
            $this->rule2,
            [['anons'], 'required'],
            [['anons', 'level_text_ru', 'bottom_text', 'bottom_text_ru', 'bottom_text_en', 'level_text_en', 'anons_ru', 'anons_en', 'title_ru', 'title_en', 'keywords_ru', 'keywords_en', 'description_ru', 'description_en'], 'string'],
            [['parent_id','exam_id'], 'integer'],
            [['title'], 'string', 'max' => 254],
            [['keywords', 'description', 'level_text', 'level', 'abbr_text', 'abbr', 'img', 'symbol'], 'string', 'max' => 255],
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
            'exam_id' => 'Экзамен для записи',
            'anons' => 'Описание',
            'keywords' => 'Ключевые слова',
            'description' => 'Мета-описание',
            'abbr' => 'Аббревиатура',
            'level' => 'Уровень',
            'bottom_text' => 'Текст внизу',
            'bottom_text_ru' => 'Текст внизу(Ru)',
            'bottom_text_en' => 'Текст внизу(En)',
            'level_text' => 'Описание уровня',
            'abbr_text' => 'Описание аббревиатуры',
            'price' => 'Цена',
            'parent_id' => 'Родитель',
            'img' => 'Изображение',
            'image' => 'Изображение',
            'imageAlt' => 'Изображение Alt',
            'imageTitle' => 'Изображение Title',
            'symbol' => 'Символьный код',
            'level_text_ru' => 'Описание уровня(Ru)',
            'level_text_en' => 'Описание уровня(En)',
            'anons_ru' => 'Описание(Ru)',
            'anons_en' => 'Описание(En)',
            'title_ru' => 'Заголовок(Ru)',
            'title_en' => 'Заголовок(En)',
            'keywords_ru' => 'Ключевые слова(Ru)',
            'keywords_en' => 'Ключевые слова(En)',
            'description_ru' => 'Мета-описание(Ru)',
            'description_en' => 'Мета-описание(En)',
        ];
    }

    public function getCategories(){
        $arCats = $this->find()->asArray()->where(['parent_id'=>0])->all();
        return ArrayHelper::map($arCats, 'id', 'title');
    }

    public function getParentName($model){
        if($model->parent_id){
            $parent = Exams::findOne($model->parent_id);
            return $parent->title;
        }else{
            return '-';
        }
    }

    public function getExamsItem(){
        return ArrayHelper::map(ExamItem::find()->asArray()->all(),'id','name');
    }
}
