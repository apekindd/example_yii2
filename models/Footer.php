<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "footer".
 *
 * @property integer $id
 * @property string $title
 * @property string $title_ru
 * @property string $title_en
 * @property string $link
 * @property string $section
 * @property integer $sort
 */
class Footer extends \yii\db\ActiveRecord
{
    public function afterFind()
    {
        if(Yii::$app->language == 'ru') {
            $this->title = $this->title_ru;

        } elseif (Yii::$app->language == 'en') {
            $this->title = $this->title_en;
        }
        return true;
    }
}
