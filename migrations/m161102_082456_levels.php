<?php

use yii\db\Migration;

class m161102_082456_levels extends Migration
{
    public function up()
    {
        $this->addColumn("levels","left_column_plus","string");
        $this->addColumn("levels","left_column_plus_ru","string");
        $this->addColumn("levels","left_column_plus_en","string");
        $this->update('levels', ['left_column_plus'=>'CPE
(Certificate of Proficiency in English)
C2'],'id=2');
    }

    public function down()
    {
        $this->dropColumn("levels","left_column_plus");
        $this->dropColumn("levels","left_column_plus_ru");
        $this->dropColumn("levels","left_column_plus_en");
        $this->update('levels', ['left_column_plus'=>''],'id=2');
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
