<?php

use yii\db\Migration;

class m161025_125224_add_nameColumn_forContacts extends Migration
{
    public function up()
    {
        $this->addColumn("contacts","name",$this->string(255));
        $this->addColumn("contacts","name_ru",$this->string(255));
        $this->addColumn("contacts","name_en",$this->string(255));
    }

    public function down()
    {
        $this->dropColumn("contacts","name");
        $this->dropColumn("contacts","name_ru");
        $this->dropColumn("contacts","name_en");
    }
}
