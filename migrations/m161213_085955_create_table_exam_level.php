<?php

use yii\db\Migration;

class m161213_085955_create_table_exam_level extends Migration
{
    public function up()
    {
        $this->createTable('exam_level', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'sort' => $this->integer()->defaultValue(500)->notNull(),
            'exams' => $this->string(255),
        ] );
    }

    public function down()
    {
        $this->dropTable('exam_level');
    }
}
