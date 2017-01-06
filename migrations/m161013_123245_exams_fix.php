<?php

use yii\db\Migration;

class m161013_123245_exams_fix extends Migration
{
    public function up()
    {
        $this->addColumn('exams', 'leftcol_ru', 'text not null');
        $this->addColumn('exams', 'leftcol_en', 'text not null');
        $this->addColumn('exams', 'anons_ru', 'text not null');
        $this->addColumn('exams', 'anons_en', 'text not null');
        $this->addColumn('exams', 'title_ru', 'text not null');
        $this->addColumn('exams', 'title_en', 'text not null');
        $this->addColumn('exams', 'keywords_ru', 'text not null');
        $this->addColumn('exams', 'keywords_en', 'text not null');
        $this->addColumn('exams', 'description_ru', 'text not null');
        $this->addColumn('exams', 'description_en', 'text not null');
        $this->dropColumn('exams', 'text');
        $this->dropColumn('exams', 'show_detail');

    }

    public function down()
    {
        $this->dropColumn('exams', 'leftcol_ru');
        $this->dropColumn('exams', 'leftcol_en');
        $this->dropColumn('exams', 'anons_ru');
        $this->dropColumn('exams', 'anons_en');
        $this->dropColumn('exams', 'title_ru');
        $this->dropColumn('exams', 'title_en');
        $this->dropColumn('exams', 'keywords_ru');
        $this->dropColumn('exams', 'keywords_en');
        $this->dropColumn('exams', 'description_ru');
        $this->dropColumn('exams', 'description_en');
        $this->addColumn('exams', 'text', 'text');
        $this->addColumn('exams', 'show_detail', 'text');
    }

}
