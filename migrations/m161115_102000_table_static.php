<?php

use yii\db\Migration;

class m161115_102000_table_static extends Migration
{
    public function up()
    {
        $this->addColumn("static_page","table","string");
        $this->update('static_page', ['table'=> '1|2'], ['id'=>8]);
    }

    public function down()
    {
        $this->dropColumn("static_page","table");
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
