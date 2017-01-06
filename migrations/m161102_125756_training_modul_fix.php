<?php

use yii\db\Migration;

class m161102_125756_training_modul_fix extends Migration
{
    public function up()
    {
        $this->update('trainings', ['text'=> 'Главная цель этих курсов — углублять знания о коммуникативной методике и научить получать максимальную пользу от использования аутентичных учебников.
<br>Каждый пройденный модуль открывает перед вами новые аспекты обучения английскому языку и использования учебника. После завершения всех трех модулей вы будете достаточно подготовлены для того, чтобы задуматься о сдаче экзамена TKT.'], ['id'=>12]);
    }

    public function down()
    {
        $this->update('trainings', ['text'=> 'Главная цель этих курсов — углублять знания о коммуникативной методике и научить получать максимальную пользу от использования аутентичных учебников.
Каждый пройденный модуль открывает перед вами новые аспекты обучения английскому языку и использования учебника. После завершения всех трех модулей вы будете достаточно подготовлены для того, чтобы задуматься о сдаче экзамена TKT.'], ['id'=>12]);

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