<?php

use yii\db\Migration;

class m161027_092719_table extends Migration
{
    public function up()
    {
        $this->createTable('tables', [
            'id' => 'pk',
            'title' => 'string NOT NULL',
            'title_ru' => 'string NOT NULL',
            'title_en' => 'string NOT NULL',
            'text' => 'text NOT NULL',
            'text_ru' => 'text NOT NULL',
            'text_en' => 'text NOT NULL',
            'sort' => $this->integer()->defaultValue(0),
        ] );
    }

    public function down()
    {
        $this->dropTable('tables');

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
