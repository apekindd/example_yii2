<?php

use yii\db\Migration;

class m161114_092012_trainings_index extends Migration
{
    public function up()
    {
        $this->insert('trainings',
                ['id'=>51,
                'title'=>'Тренинги для преподавателей',
                'anons'=>'International Language Centre предлагает курсы английского языка в Киеве для детей разных возрастных групп (4–17 лет). Интерактивный подход, многолетний опыт работы, а также отсутствие прямого перевода превращают обучение в удовольствие и гарантируют быстрый результат.',
                ]
        );

    }

    public function down()
    {
        $this->delete('trainings', ['id'=>51]);
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
