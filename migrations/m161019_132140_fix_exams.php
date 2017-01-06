<?php

use yii\db\Migration;

class m161019_132140_fix_exams extends Migration
{
    public function up()
    {
        $this->dropColumn('exams', 'backgroundimg');
        $this->alterColumn('exams', 'title_ru', 'string NOT NULL');
        $this->alterColumn('exams', 'title_en', 'string NOT NULL');
        $this->alterColumn('exams', 'keywords_ru', 'string NOT NULL');
        $this->alterColumn('exams', 'keywords_en', 'string NOT NULL');
        $this->alterColumn('exams', 'description_ru', 'string NOT NULL');
        $this->alterColumn('exams', 'description_en', 'string NOT NULL');
    }

    public function down()
    {
        $this->addColumn('exams', 'backgroundimg','text');
    }
}
