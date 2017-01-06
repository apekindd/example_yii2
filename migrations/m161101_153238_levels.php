<?php

use yii\db\Migration;

class m161101_153238_levels extends Migration
{
    public function up()
    {
        $this->addColumn("levels","period","string");
        $this->addColumn("levels","period_ru","string");
        $this->addColumn("levels","period_en","string");
        $this->update('levels', ['period'=>'Курс длится 1 семестр.'],'id=1');
        $this->update('levels', ['period'=>'Курс длится 3 семестра.'],'id=2');
    }

    public function down()
    {
        $this->dropColumn("levels","period");
        $this->dropColumn("levels","period_ru");
        $this->dropColumn("levels","period_en");
        $this->update('levels', ['period'=>''],'id=1');
        $this->update('levels', ['period'=>''],'id=2');
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
