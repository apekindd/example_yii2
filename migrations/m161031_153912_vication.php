<?php

use yii\db\Migration;

class m161031_153912_vication extends Migration
{
    public function up()
    {
        $this->addColumn("courses","subtitle","string");
        $this->addColumn("courses","subtitle_ru","string");
        $this->addColumn("courses","subtitle_en","string");
        $this->update('courses', ['subtitle'=>'YOUNG TRAVELERS','price'=>'100'],'id=54');
        $this->update('courses', ['subtitle'=>'GAMES AND SONGS','price'=>'200'],'id=55');
    }

    public function down()
    {
        $this->dropColumn("courses","subtitle","string");
        $this->dropColumn("courses","subtitle_ru","string");
        $this->dropColumn("courses","subtitle_en","string");
        $this->update('courses', ['subtitle'=>'YOUNG TRAVELERS','price'=>'100'],'id=54');
        $this->update('courses', ['subtitle'=>'GAMES AND SONGS','price'=>'200'],'id=55');
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
