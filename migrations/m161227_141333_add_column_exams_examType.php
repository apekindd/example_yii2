<?php

use yii\db\Migration;

class m161227_141333_add_column_exams_examType extends Migration
{
    public function up()
    {
        $this->addColumn('exams', 'exam_id', $this->integer());

        // creates index for column `exam_id`
        $this->createIndex(
            'idx-exams-exam_id',
            'exams',
            'exam_id'
        );

        // add foreign key for table `exam_item`
        $this->addForeignKey(
            'fk-exams-exam_id',
            'exams',
            'exam_id',
            'exam_item',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        // drops foreign key for table `exam_item`
        $this->dropForeignKey(
            'fk-exams-exam_id',
            'exams'
        );

        // drops index for column `exam_id`
        $this->dropIndex(
            'idx-exams-exam_id',
            'exams'
        );

        $this->dropColumn('exams', 'exam_id');
    }
}
