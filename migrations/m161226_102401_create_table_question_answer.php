<?php

use yii\db\Migration;

class m161226_102401_create_table_question_answer extends Migration
{
    public function up()
    {
        $this->createTable('question_answer', [
            'id' => $this->primaryKey(),
            'test' => $this->string(255),
            'question' => $this->string(255),
            'answer' => $this->text()
        ] );
    }

    public function down()
    {
        $this->dropTable('question_answer');
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