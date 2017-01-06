<?php

use yii\db\Migration;

class m161115_114813_fix_delta_moduls extends Migration
{
    public function up()
    {
        $this->update('trainings', ['anons'=> '(delta module1)'], ['id'=>3]);
        $this->update('trainings', ['anons'=> '(delta module2)'], ['id'=>4]);
        $this->update('trainings', ['anons'=> '(delta module3)'], ['id'=>5]);
        $this->update('trainings', ['title'=> 'Подготовка к экзамену'], ['id'=>3]);
        $this->update('trainings', ['title'=> 'Тренинговый курс'], ['id'=>4]);
        $this->update('trainings', ['title'=> 'Курсовая работа'], ['id'=>5]);
    }

    public function down()
    {

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
