<?php

use yii\db\Migration;

class m161031_083852_training_celta_detail_add extends Migration
{
    public function up()
    {
        $this->insert('trainings', [
            'id' => '50',
            'title' => 'TEACHING PRACTICE AND OBSERVATION',
            'title_ru' => 'RU TEACHING PRACTICE AND OBSERVATION',
            'title_en' => 'EN TEACHING PRACTICE AND OBSERVATION',
            'description' => 'description',
            'description_ru' => 'ru description',
            'description_en' => 'en description',
            'keywords' => 'keywords',
            'keywords_ru' => 'keywords',
            'keywords_en' => 'keywords',
            'text' => 'Teaching practice is an integral part of the course and takes place every day. It is related to the areas covered in the input sessions. Trainees work in groups of six with small classes of students to get experience of teaching at different levels (beginners to advanced). Lessons are discussed by TP groups and tutors after TP. Trainees also observe at least 8 hours of lessons given by qualified teachers. Additional time is required for lesson preparation and written assignments. As the course is full-time and very intensive it is impossible to have any other commitments during the period of the course. Trainees will find they have to work in the evenings and at weekends.',
            'text_ru' => 'RU TEXT',
            'text_en' => 'EN TEXT',
            'parent_id' => '6',
        ]);
    }

    public function down()
    {
        $this->delete('trainings', ['id'=>'50']);
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
