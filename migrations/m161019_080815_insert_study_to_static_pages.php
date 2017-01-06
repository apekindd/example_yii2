<?php

use yii\db\Migration;

class m161019_080815_insert_study_to_static_pages extends Migration
{
    public function up()
    {
        $this->insert('static_page', [
            'id' => '15',
            'symbol' => 'study',
            'title' => 'Обучение',
            'title_ru' => 'RU Обучение',
            'title_en' => 'EN Обучение',
            'description' => 'description',
            'description_ru' => 'ru description',
            'description_en' => 'en description',
            'keywords' => 'keywords',
            'keywords_ru' => 'keywords',
            'keywords_en' => 'keywords',
            'text' => 'TEXT',
            'text_ru' => 'RU TEXT',
            'text_en' => 'EN TEXT',
        ]);
    }

    public function down()
    {
        $this->delete('static_page', ['id' => 15]);
    }

}
