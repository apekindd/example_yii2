<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "online_test".
 *
 * @property integer $id
 * @property string $name
 */
class OnlineTest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'online_test';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name',"name_ru","name_en"], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'name_ru' => 'Название(Ru)',
            'name_en' => 'Название(En)',
        ];
    }
}
