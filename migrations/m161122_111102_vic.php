<?php

use yii\db\Migration;

class m161122_111102_vic extends Migration
{
    public function up()
    {
        $this->update('courses', [
            'symbol'=>'small'
        ], ['id'=>54]);
        $this->update('courses', [
            'symbol'=>'songs'
        ], ['id'=>55]);
    }

    public function down()
    {
        $this->update('courses', [
            'symbol'=>''
        ], ['id'=>54]);
        $this->update('courses', [
            'symbol'=>''
        ], ['id'=>55]);
    }
}
