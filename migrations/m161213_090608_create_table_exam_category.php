<?php

use yii\db\Migration;

class m161213_090608_create_table_exam_category extends Migration
{
    public function up()
    {
        $this->createTable('exam_category', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'name_ru' => $this->string(255),
            'name_en' => $this->string(255),
            'sort' => $this->integer()->defaultValue(500)->notNull(),
            'exams' => $this->string(255)
        ] );
    }

    public function down()
    {
        $this->dropTable('exam_category');
    }
}
