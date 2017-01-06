<?php

use yii\db\Migration;

class m161031_153625_modul_fix extends Migration
{
    public function up()
    {
        $this->update('trainings', ['title'=> 'Модуль 1', 'date'=>'12.03.16–09.04.16'], ['id'=>13]);
        $this->update('trainings', ['title'=> 'Модуль 2', 'date'=>'12.03.16–09.04.16'], ['id'=>14]);
        $this->update('trainings', ['title'=> 'Модуль 3', 'date'=>'12.03.16–09.04.16'], ['id'=>15]);
        $this->update('trainings', ['title'=> 'Модуль 4', 'date'=>'12.03.16–09.04.16'], ['id'=>16]);
        $this->update('trainings', ['title'=> 'Модуль 5', 'date'=>'12.03.16–09.04.16'], ['id'=>17]);
        $this->update('trainings', ['title'=> 'Модуль 6', 'date'=>'12.03.16–09.04.16'], ['id'=>18]);
    }

    public function down()
    {
        $this->update('trainings', ['title'=> 'Модуль 1', 'date'=>'12.03.16–09.04.16'], ['id'=>13]);
        $this->update('trainings', ['title'=> 'Модуль 2', 'date'=>'12.03.16–09.04.16'], ['id'=>14]);
        $this->update('trainings', ['title'=> 'Модуль 3', 'date'=>'12.03.16–09.04.16'], ['id'=>15]);
        $this->update('trainings', ['title'=> 'Модуль 4', 'date'=>'12.03.16–09.04.16'], ['id'=>16]);
        $this->update('trainings', ['title'=> 'Модуль 5', 'date'=>'12.03.16–09.04.16'], ['id'=>17]);
        $this->update('trainings', ['title'=> 'Модуль 6', 'date'=>'12.03.16–09.04.16'], ['id'=>18]);
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
