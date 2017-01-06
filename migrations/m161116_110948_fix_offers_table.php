<?php

use yii\db\Migration;

class m161116_110948_fix_offers_table extends Migration
{
    public function up()
    {
        $this->addColumn('offers','type', $this->string(255));
        $this->addColumn('offers','product_id', $this->integer());
    }

    public function down()
    {
        $this->dropColumn('offers','type');
        $this->dropColumn('offers','product_id');
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
