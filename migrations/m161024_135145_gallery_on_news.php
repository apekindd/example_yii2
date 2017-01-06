<?php

use yii\db\Migration;

class m161024_135145_gallery_on_news extends Migration
{
    public function up()
    {
        $this->alterColumn('news', 'img', 'text');
    }

    public function down()
    {
        $this->alterColumn('news', 'img', 'string NOT NULL');
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
