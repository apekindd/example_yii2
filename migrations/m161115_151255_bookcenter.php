<?php

use yii\db\Migration;

class m161115_151255_bookcenter extends Migration
{
    public function up()
    {
        $this->insert('static_page',[
            'id'=> 20,
            'title'=> 'Книжный центр',
            'title_ru'=> 'Книжный центр_ru',
            'title_en'=> 'Книжный центр_en',
            'text'=> 'Наша компания – Официальный дистрибьютор издательства Oxford University Press.
Мы предлагаем учебники по английскому языку, лицензионные аудио и видео компоненты, интерактивные компакт-диски, словари, страноведческую и художественную литературу.',        ]);
    }

    public function down()
    {
       $this->delete('static_page', ['id'=>20]);
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
