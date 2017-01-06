<?php

use yii\db\Migration;

class m161020_133014_footer_menu1 extends Migration
{
    public function up()
    {
        $this->update('footer', ['section'=>'exams'], ['ID' => [13]]);
        $this->update('footer', ['section'=>'exams'], ['ID' => [14]]);
        $this->update('footer', ['section'=>'exams'], ['ID' => [15]]);
        $this->insert('footer', [
            'id' => '201',
            'title' => 'Партнерская программа',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/exams/general',
            'section' => 'exams',
        ]);
    }

    public function down()
    {
        $this->delete('exams', ['id' => '201']);
    }
}
