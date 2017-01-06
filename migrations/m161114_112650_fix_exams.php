<?php

use yii\db\Migration;

class m161114_112650_fix_exams extends Migration
{
    public function up()
    {
        $this->dropColumn("exams","leftcol");
        $this->dropColumn("exams","leftcol_ru");
        $this->dropColumn("exams","leftcol_en");

        $this->addColumn("exams","abbr","string");
        $this->addColumn("exams","abbr_text","string");
        $this->addColumn("exams","level","string");
        $this->addColumn("exams","level_text","string");
        $this->addColumn("exams","level_text_ru","string");
        $this->addColumn("exams","level_text_en","string");
    }

    public function down()
    {
        $this->addColumn("exams","leftcol","text");
        $this->addColumn("exams","leftcol_ru","text");
        $this->addColumn("exams","leftcol_en","text");

        $this->dropColumn("exams","abbr");
        $this->dropColumn("exams","abbr_text");
        $this->dropColumn("exams","level");
        $this->dropColumn("exams","level_text");
        $this->dropColumn("exams","level_text_ru");
        $this->dropColumn("exams","level_text_en");
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
