<?php

use yii\db\Migration;

class m161213_090633_create_table_exam_request extends Migration
{
    public function up()
    {
        $this->createTable('exam_request', [
            'id' => $this->primaryKey(),
            'fio' => $this->string(255),
            'email' => $this->string(255),
            'phone' => $this->string(255),
            'birth' => $this->string(255),
            'comment' => $this->text(),
            'exam' => $this->string(255),
            'exam_date' => $this->string(255),
        ] );
    }

    public function down()
    {
        $this->dropTable('exam_request');
    }
}
