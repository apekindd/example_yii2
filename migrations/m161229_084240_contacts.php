<?php

use yii\db\Migration;

class m161229_084240_contacts extends Migration
{
    public function up()
    {
        $this->addColumn('contacts','isStudyCenter',$this->integer());
    }

    public function down()
    {
        $this->dropColumn('contacts','isStudyCenter');

        return false;
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
