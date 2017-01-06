<?php

use yii\db\Migration;

class m161226_102844_create_table_test_result extends Migration
{
    public function up()
    {
        //TODO add result column
        $this->createTable('test_result', [
            'id' => $this->primaryKey(),
            'email' => $this->string(255),
            'date_time' => $this->string(11),
            'test' => $this->string(255),
            'result' => $this->string()
        ] );
    }

    public function down()
    {
        $this->dropTable('test_result');
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
