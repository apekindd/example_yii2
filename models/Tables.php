<?php
namespace app\models;

use yii\db\ActiveRecord;
use Yii;


class Tables extends ActiveRecord{
    public function afterFind()
    {
        if(Yii::$app->language == 'ru') {
            $this->title = $this->title_ru;
            $this->text = $this->text_ru;

        } elseif (Yii::$app->language == 'en') {
            $this->title = $this->title_ru;
            $this->text = $this->text_ru;
        }
        return true;
    }
}