<?php

use yii\db\Migration;

class m161213_090614_create_table_exam_date extends Migration
{
    public function up()
    {
        $this->createTable('exam_date', [
            'id' => $this->primaryKey(),
            'price' => $this->float()->notNull(),
            'date' => $this->string(11),
            'registration_to' => $this->string(11),
            'close' => $this->integer(1)->notNull()->defaultValue(0),
            'exam_item_id' => $this->integer()->notNull(),
        ] );

        // creates index for column `exam_item_id`
        $this->createIndex(
            'idx-exam_date-exam_item_id',
            'exam_date',
            'exam_item_id'
        );

        // add foreign key for table `exam_item`
        $this->addForeignKey(
            'fk-exam_date-exam_item_id',
            'exam_date',
            'exam_item_id',
            'exam_item',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        // drops foreign key for table `exam_item`
        $this->dropForeignKey(
            'fk-exam_date-exam_item_id',
            'exam_date'
        );

        // drops index for column `exam_date`
        $this->dropIndex(
            'idx-exam_date-exam_item_id',
            'exam_date'
        );


        $this->dropTable('exam_date');
    }
}
