<?php

use yii\db\Migration;

class m170104_103127_teachers_isd extends Migration
{
    public function up()
    {
        $this->addColumn('teachers', 'isDelta', $this->integer());
    }

    public function down()
    {
        $this->dropColumn('teachers', 'isDelta');

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
