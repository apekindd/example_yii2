<?php

use yii\db\Migration;

class m170104_093109_t_dates extends Migration
{
    public function up()
    {
        $this->createTable('trainings_date', [
            'id' => $this->primaryKey(),
            'training_id' => $this->integer(),
            'date_from' => $this->integer(),
            'date_to' => $this->integer(),
            'is_full_time' => $this->integer(),
            'description' => $this->string(255),
            'description_ru' => $this->string(255),
            'description_en' => $this->integer()
        ] );
    }

    public function down()
    {
        $this->dropTable('trainings_date');
        
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
