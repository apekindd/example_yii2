<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exam_request".
 *
 * @property integer $id
 * @property string $fio
 * @property string $email
 * @property string $phone
 * @property string $birth
 * @property string $comment
 * @property string $exam
 * @property string $exam_date
 * @property double $price
 */
class ExamRequest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'exam_request';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comment'], 'string'],
            [['price'], 'number'],
            [['fio', 'email', 'phone', 'birth', 'exam', 'exam_date'], 'string', 'max' => 255],
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
            'birth' => 'День Рождения',
            'comment' => 'Комментарий',
            'exam' => 'Экзамен',
            'exam_date' => 'Дата Экзамена',
            'price' => 'Цена',
            'date_create' => 'Дата Создания',
        ];
    }
}
