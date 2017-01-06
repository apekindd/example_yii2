<?php

use yii\db\Migration;

class m170104_105858_t_requests extends Migration
{
    public function up()
    {
        $this->createTable('trainings_request', [
            'id' => $this->primaryKey(),
            'fio' => $this->string(255),
            'email' => $this->string(255),
            'phone' => $this->string(255),
            'birth_date' => $this->string(255),
            'nationality' => $this->string(255),
            'date_create' => $this->string(12)
        ] );
    }

    public function down()
    {
        $this->dropTable('trainings_request');

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
