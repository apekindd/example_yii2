<?php

use yii\db\Migration;

class m161227_133841_head extends Migration
{
    public function up()
    {
        //TODO add result column
        $this->createTable('headermenu', [
            'id' => $this->primaryKey(),
            'title_ua' => $this->string(255),
            'title_ru' => $this->string(255),
            'title_en' => $this->string(255),
            'parent_id' => $this->integer(),
            'sort' => $this->integer(),
            'link' => $this->string(),
        ] );
    }

    public function down()
    {
        $this->dropTable('headermenu');
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
