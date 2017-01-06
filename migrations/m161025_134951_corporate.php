<?php

use yii\db\Migration;

class m161025_134951_corporate extends Migration
{
    public function up()
    {
        $this->alterColumn('benefits', 'text', 'text');

        $this->update('benefits', ['text'=>'<ul>
            <li>Курс общего английского — улучшает навыки чтения, письма, аудирования и речи в ежедневном использовании языка для работы, направлен на повышение общего уровня английского.</li>
            <li>Курс делового английского — изучение бизнес-английского для совершенствования комуникативных навыков путем пополнения лексических и грамматических знаний.</li>
            <li>Курс подготовки к экзаменам FCE, CAE, CPE, IELTS, ILEC.</li>
            <li>Индивидуально разработанный курс.</li>
        </ul>'], ['ID' => [4]]);

        $this->update('benefits', ['text'=>'<ul>
            <li>Курс «Ведение презентаций»</li>
            <li>Курс «Успешное ведение переговоров»</li>
            <li>Курс «Обслуживание клиентов»</li>
            <li>Курс «Тайм менеджмент»</li>
            <li>Курс «Эффективное планирование»</li>
            <li>Курс «Деловое письмо»</li>
            <li>Индивидуально разработанные короткие языковые тренинги</li>
        </ul>'], ['ID' => [5]]);
    }

    public function down()
    {
        $this->alterColumn('benefits', 'text', 'string NOT NULL');
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
