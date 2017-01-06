<?php

use yii\db\Migration;

class m161017_083600_teachers extends Migration
{
    public function up()
    {
        $this->createTable('teachers', [
            'id' => 'pk',
            'name' => 'string NOT NULL',
            'name_ru' => 'string NOT NULL',
            'name_en' => 'string NOT NULL',
            'text' => 'text NOT NULL',
            'text_ru' => 'text NOT NULL',
            'text_en' => 'text NOT NULL',
            'img' => 'text NOT NULL',
        ]);

        $this->insert('teachers', [
            'id' => '1',
            'name' => 'МОРОЗОВ ИВАН ВЛАДИМИРОВИЧ',
            'name_ru' => 'ru МОРОЗОВ ИВАН ВЛАДИМИРОВИЧ',
            'name_en' => 'en МОРОЗОВ ИВАН ВЛАДИМИРОВИЧ',
            'text' => 'text NOT NULL',
            'text_ru' => 'text NOT NULL',
            'text_en' => 'text NOT NULL',
            'img' => 'temp.jpg',
        ]);

        $this->insert('static_page', [
            'id' => '4',
            'symbol' => 'teachers',
            'title' => 'Наши преподаватели',
            'title_ru' => 'RU Наши преподаватели',
            'title_en' => 'EN Наши преподаватели',
            'description' => 'description',
            'description_ru' => 'ru description',
            'description_en' => 'en description',
            'keywords' => 'keywords',
            'keywords_ru' => 'keywords',
            'keywords_en' => 'keywords',
            'text' => 'Наша школа имеет необходимый преподавательский состав и ресурсную базу, чтобы предложить Вашей компании курс или тренинг по английскому языку, соответствующий международным стандартам качества.',
            'text_ru' => '',
            'text_en' => '',
        ]);
    }

    public function down()
    {
        $this->delete('teachers',['id'=>'1']);
        $this->delete('static_page',['id'=>'4']);
        $this->dropTable('teachers');
    }

}
