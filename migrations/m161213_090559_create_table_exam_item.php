<?php

use yii\db\Migration;

class m161213_090559_create_table_exam_item extends Migration
{
    public function up()
    {
        $this->createTable('exam_item', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'sort' => $this->integer()->defaultValue(500)->notNull()
        ] );
    }

    public function down()
    {
        $this->dropTable('exam_item');
    }
}
