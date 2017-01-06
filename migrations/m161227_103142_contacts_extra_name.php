<?php

use yii\db\Migration;

class m161227_103142_contacts_extra_name extends Migration
{
    public function up()
    {
        $this->addColumn('contacts','extra_name',$this->string(64));
        $this->addColumn('contacts','extra_name_ru',$this->string(64));
        $this->addColumn('contacts','extra_name_en',$this->string(64));
    }

    public function down()
    {
        $this->dropColumn('contacts','extra_name');
        $this->dropColumn('contacts','extra_name_ru');
        $this->dropColumn('contacts','extra_name_en');
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
