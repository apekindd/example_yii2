<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trainings_request".
 *
 * @property integer $id
 * @property string $fio
 * @property string $email
 * @property string $phone
 * @property string $birth_date
 * @property string $nationality
 * @property string $date_create
 */
class TrainingsRequest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trainings_request';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fio'], 'required'],
            [['fio', 'email', 'phone', 'birth_date', 'nationality'], 'string', 'max' => 255],
            [['date_create'], 'string', 'max' => 12],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'ФИО',
            'email' => 'Email',
            'phone' => 'Телефон',
            'birth_date' => 'Дата рождения',
            'nationality' => 'Национальность',
            'date_create' => 'Дата заявки',
        ];
    }
}
