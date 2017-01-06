<?php

use yii\db\Migration;

class m161221_142126_contacts_fix extends Migration
{
    public function up()
    {
        $this->addColumn('contacts','tels',$this->text());
        $this->addColumn('contacts','email',$this->text());
        $this->addColumn('contacts','schedule',$this->text());
        $this->addColumn('contacts','schedule_ru',$this->text());
        $this->addColumn('contacts','schedule_en',$this->text());
    }

    public function down()
    {
        $this->dropColumn('contacts','tels');
        $this->dropColumn('contacts','email');
        $this->dropColumn('contacts','schedule');
        $this->dropColumn('contacts','schedule_ru');
        $this->dropColumn('contacts','schedule_en');
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
