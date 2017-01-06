<?php

use yii\db\Migration;

class m161115_153347_fix extends Migration
{
    public function up()
    {
        $this->delete('exams', ['id'=>2]);
        $this->addColumn('exams', 'bottom_text', 'text');
        $this->addColumn('exams', 'bottom_text_ru', 'text');
        $this->addColumn('exams', 'bottom_text_en', 'text');
        $this->update('exams', [
            'anons'=>'Станьте центром підготовки до Кембриджських іспитів і  гарантовано отримайте вагому перевагу над іншими – статус Вашого навчального закладу та додаткові можливості:
•     проведення безкоштовних пробних тестувань та  Кембриджських іспитів на Вашій території
•     оцінювання знань Ваших учнів та студентів згідно міжнародних стандартів
•     право на використання символіки  Cambridge English  у Вашому навчальному закладі*
•     проведення безкоштовних семінарів або іспитів  в залежності від кількості ваших студентів
•     друковані матеріали для підготовки до іспитів',
        'bottom_text'=> '*від 10 студентів протягом академічного року ви отримуєте визнання від Cambridge English Language Assessment у вигляді сертифікату
від 30 студентів – право на використання логотипу (за попередньої згоди та схвалення)
від 60 студентів – офіційна табличка про статус вашого центру'
        ], ['id'=>113]);
    }

    public function down()
    {
        $this->insert('exams', ['id'=>2,'title'=>'temp']);

        $this->dropColumn('exams', 'bottom_text');
        $this->dropColumn('exams', 'bottom_text_ru');
        $this->dropColumn('exams', 'bottom_text_en');
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
