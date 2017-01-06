<?php

use yii\db\Migration;

class m161020_130107_exams_add extends Migration
{
    public function up()
    {
        $this->delete('exams', ['id' => '1,2']);

        $this->update('exams', ['title'=>'Экзамены для взрослых'], ['ID' => [5]]);
        $this->insert('exams', [
            'id' => '110',
            'symbol' => 'teens',
            'title' => 'Экзамены для подростков',
            'title_ru' => 'RU Экзамены для подростков',
            'title_en' => 'EN Экзамены для подростков',
            'description' => 'description',
            'description_ru' => 'ru description',
            'description_en' => 'en description',
            'keywords' => 'keywords',
            'keywords_ru' => 'keywords',
            'keywords_en' => 'keywords',
            'anons' => 'TEXT',
            'anons_ru' => 'RU TEXT',
            'anons_en' => 'EN TEXT',
        ]);
        $this->insert('exams', [
            'id' => '111',
            'symbol' => 'teachers',
            'title' => 'Экзамены для учителей',
            'title_ru' => 'RU Экзамены для учителей',
            'title_en' => 'EN Экзамены для учителей',
            'description' => 'description',
            'description_ru' => 'ru description',
            'description_en' => 'en description',
            'keywords' => 'keywords',
            'keywords_ru' => 'keywords',
            'keywords_en' => 'keywords',
            'anons' => 'TEXT',
            'anons_ru' => 'RU TEXT',
            'anons_en' => 'EN TEXT',
        ]);
        $this->insert('exams', [
            'id' => '112',
            'symbol' => 'professionals',
            'title' => 'Экзамены для профессионалов',
            'title_ru' => 'RU Экзамены для профессионалов',
            'title_en' => 'EN Экзамены для профессионалов',
            'description' => 'description',
            'description_ru' => 'ru description',
            'description_en' => 'en description',
            'keywords' => 'keywords',
            'keywords_ru' => 'keywords',
            'keywords_en' => 'keywords',
            'anons' => 'TEXT',
            'anons_ru' => 'RU TEXT',
            'anons_en' => 'EN TEXT',
        ]);
        $this->insert('exams', [
            'id' => '113',
            'symbol' => 'partners',
            'title' => 'Партнерские программы',
            'title_ru' => 'RU Партнерские программы',
            'title_en' => 'EN Партнерские программы',
            'description' => 'description',
            'description_ru' => 'ru description',
            'description_en' => 'en description',
            'keywords' => 'keywords',
            'keywords_ru' => 'keywords',
            'keywords_en' => 'keywords',
            'anons' => 'TEXT',
            'anons_ru' => 'RU TEXT',
            'anons_en' => 'EN TEXT',
        ]);
    }

    public function down()
    {
        $this->delete('exams', ['id' => 110]);
        $this->delete('exams', ['id' => 111]);
        $this->delete('exams', ['id' => 112]);
        $this->delete('exams', ['id' => 113]);
    }
}
