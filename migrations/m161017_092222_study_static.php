<?php

use yii\db\Migration;

class m161017_092222_study_static extends Migration
{
    public function up()
    {
        $this->dropTable('about');
        $this->dropTable('study');
        $this->insert('static_page', [
            'id' => '5',
            'symbol' => 'schedule',
            'title' => 'Расписания',
            'title_ru' => 'RU Расписания',
            'title_en' => 'EN Расписания',
            'description' => 'description',
            'description_ru' => 'ru description',
            'description_en' => 'en description',
            'keywords' => 'keywords',
            'keywords_ru' => 'keywords',
            'keywords_en' => 'keywords',
            'text' => 'Расписания',
            'text_ru' => 'RU Расписания',
            'text_en' => 'EN Расписания',
        ]);
        $this->insert('static_page', [
            'id' => '6',
            'symbol' => 'academic',
            'title' => 'Академический календарь',
            'title_ru' => 'RU Академический календарь',
            'title_en' => 'EN Академический календарь',
            'description' => 'description',
            'description_ru' => 'ru description',
            'description_en' => 'en description',
            'keywords' => 'keywords',
            'keywords_ru' => 'keywords',
            'keywords_en' => 'keywords',
            'text' => 'Академический календарь',
            'text_ru' => 'RU Академический календарь',
            'text_en' => 'EN Академический календарь',
        ]);
        $this->insert('static_page', [
            'id' => '7',
            'symbol' => 'methods',
            'title' => 'Методика и формы обучения',
            'title_ru' => 'RU Методика и формы обучения',
            'title_en' => 'EN Методика и формы обучения',
            'description' => 'description',
            'description_ru' => 'ru description',
            'description_en' => 'en description',
            'keywords' => 'keywords',
            'keywords_ru' => 'keywords',
            'keywords_en' => 'keywords',
            'text' => 'Методика и формы обучения',
            'text_ru' => 'RU Методика и формы обучения',
            'text_en' => 'EN Методика и формы обучения',
        ]);
        $this->insert('static_page', [
            'id' => '8',
            'symbol' => 'levels',
            'title' => 'Уровни языка',
            'title_ru' => 'RU Уровни языка',
            'title_en' => 'EN Уровни языка',
            'description' => 'description',
            'description_ru' => 'ru description',
            'description_en' => 'en description',
            'keywords' => 'keywords',
            'keywords_ru' => 'keywords',
            'keywords_en' => 'keywords',
            'text' => 'Уровни языка',
            'text_ru' => 'RU Уровни языка',
            'text_en' => 'EN Уровни языка',
        ]);
        $this->insert('static_page', [
            'id' => '9',
            'symbol' => 'rules',
            'title' => 'Правила обучения',
            'title_ru' => 'RU Правила обучения',
            'title_en' => 'EN Правила обучения',
            'description' => 'description',
            'description_ru' => 'ru description',
            'description_en' => 'en description',
            'keywords' => 'keywords',
            'keywords_ru' => 'keywords',
            'keywords_en' => 'keywords',
            'text' => 'Правила обучения',
            'text_ru' => 'RU Правила обучения',
            'text_en' => 'EN Правила обучения',
        ]);
        $this->insert('static_page', [
            'id' => '10',
            'symbol' => 'loyalty',
            'title' => 'Программа лояльности',
            'title_ru' => 'RU Программа лояльности',
            'title_en' => 'EN Программа лояльности',
            'description' => 'description',
            'description_ru' => 'ru description',
            'description_en' => 'en description',
            'keywords' => 'keywords',
            'keywords_ru' => 'keywords',
            'keywords_en' => 'keywords',
            'text' => 'Программа лояльности',
            'text_ru' => 'RU Программа лояльности',
            'text_en' => 'EN Программа лояльности',
        ]);
    }

    public function down()
    {
        $this->createTable('about', [
            'id' => 'pk',
        ] );
        $this->createTable('study', [
            'id' => 'pk',
        ] );
        $this->delete('static_page', ['id' => 5]);
        $this->delete('static_page', ['id' => 6]);
        $this->delete('static_page', ['id' => 7]);
        $this->delete('static_page', ['id' => 8]);
        $this->delete('static_page', ['id' => 9]);
        $this->delete('static_page', ['id' => 10]);
    }

}
