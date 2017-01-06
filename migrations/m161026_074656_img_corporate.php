<?php

use yii\db\Migration;

class m161026_074656_img_corporate extends Migration
{
    public function up()
    {

        $this->update('courses', ['backgroundimg'=>'course-header_corporate.jpg'], ['ID' => [12]]);
    }

    public function down()
    {
        echo "m161026_074656_img_corporate cannot be reverted.\n";

        return false;
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
