<?php

use yii\db\Migration;

class m161019_073511_add_title extends Migration
{
    public function up()
    {
        $this->addColumn("partners","name","string");
    }

    public function down()
    {
        $this->dropColumn("partners","name");
    }
}
