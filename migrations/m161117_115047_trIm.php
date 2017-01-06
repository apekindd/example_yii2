<?php

use yii\db\Migration;

class m161117_115047_trIm extends Migration
{
    public function up()
    {

        $this->update('exams', [
            'img'=>'{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}'
        ]);
        $this->update('trainings', [
            'img'=>'{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}'
        ]);
    }

    public function down()
    {
        $this->update('exams', [
            'img'=>''
        ]);
        $this->update('trainings', [
            'img'=>''
        ]);
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
