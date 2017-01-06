<?php

use yii\db\Migration;

class m161101_094105_exam_child extends Migration
{
    public function up()
    {
        $this->addColumn("levels","price","string");
        $this->update('courses', ['img'=>'{"img":"cambridge-logo.jpg","alt":"a","title":"bbb"}'],'id=50');
        $this->update('levels', ['price'=>'250$'],'id=1');
        $this->update('levels', ['price'=>'120$'],'id=2');
        $this->update('courses', ['price'=>'100 грн.'],'id=54');
        $this->update('courses', ['price'=>'200 грн.'],'id=55');
    }

    public function down()
    {
        $this->dropColumn("levels","price","string");
        $this->update('courses', ['img'=>'{"img":"cambridge-logo.jpg","alt":"a","title":"bbb"}'],'id=50');
        $this->update('levels', ['price'=>'250$'],'id=1');
        $this->update('levels', ['price'=>'120$'],'id=2');
        $this->update('courses', ['price'=>'100 грн.'],'id=54');
        $this->update('courses', ['price'=>'200 грн.'],'id=55');
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
