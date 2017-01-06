<?php

use yii\db\Migration;

class m161220_102644_del_sort_fromExamItem extends Migration
{
    public function up()
    {
        $this->dropColumn('exam_item','sort');
    }

    public function down()
    {
        $this->addColumn('exam_item', 'sort', $this->integer()->defaultValue(500)->notNull());
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
