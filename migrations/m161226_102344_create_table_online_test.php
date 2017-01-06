<?php

use yii\db\Migration;

class m161226_102344_create_table_online_test extends Migration
{
    public function up()
    {
        $this->createTable('online_test', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'name_ru' => $this->string(255),
            'name_en' => $this->string(255)
        ] );
    }

    public function down()
    {
        $this->dropTable('online_test');
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
