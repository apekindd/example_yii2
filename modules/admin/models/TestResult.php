<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "test_result".
 *
 * @property integer $id
 * @property string $email
 * @property string $date_time
 * @property string $test
 * @property string $result
 */
class TestResult extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test_result';
    }

    public function beforeSave($insert)
    {

        $this->date_time = strtotime($this->date_time);
        return parent::beforeSave($insert);
    }

    public function afterFind()
    {
        $this->date_time = date("d.m.Y H:i", $this->date_time);
        parent::afterFind(); // TODO: Change the autogenerated stub
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'test', 'result'], 'string', 'max' => 255],
            [['date_time'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'date_time' => 'Время добавления',
            'test' => 'Тест',
            'result' => 'Результат',
        ];
    }
}
