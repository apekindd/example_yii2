<?php

use yii\db\Migration;

class m161101_132107_delete_course_item_symbol extends Migration
{
    public function up()
    {
        $this->update('courses', ['symbol'=>''],'id=6');
        $this->update('courses', ['symbol'=>''],'id=54');
        $this->update('courses', ['symbol'=>''],'id=55');

        $this->update('exams', ['parent_id'=>'0'],'id=2');

        $this->delete('exams', ['id'=>10]);
        $this->delete('exams', ['id'=>11]);
        $this->delete('exams', ['id'=>12]);
        $this->delete('exams', ['id'=>13]);
    }

    public function down()
    {
        $this->update('courses', ['symbol'=>'ielts'],'id=6');
        $this->update('courses', ['symbol'=>'young_travelers'],'id=54');
        $this->update('courses', ['symbol'=>'games_and_songs'],'id=55');

        $this->update('exams', ['parent_id'=>'1'],'id=2');

        $this->insert('exams', [
            'id' => '10',
            'symbol' => 'test10',
            'title' => 'test10',
            ]);
        $this->insert('exams', [
            'id' => '11',
            'symbol' => 'test11',
            'title' => 'test11',
        ]);
        $this->insert('exams', [
            'id' => '12',
            'symbol' => 'test12',
            'title' => 'test12',
        ]);
        $this->insert('exams', [
            'id' => '13',
            'symbol' => 'test13',
            'title' => 'test13',
        ]);
    }
}
