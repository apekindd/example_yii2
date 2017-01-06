<?php

use yii\db\Migration;

class m161130_092733_delete_training_for_teachers_item extends Migration
{
    public function up()
    {
        $this->delete('footer', ['id'=>6]);
    }

    public function down()
    {
        $this->insert('footer', [
            'id' => 6,
            'title' => 'Тренинги для преподователей',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/trainings/delta',
            'section' => 'trainings',
        ]);
    }
}
