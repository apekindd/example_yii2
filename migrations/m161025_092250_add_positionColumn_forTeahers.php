<?php

use yii\db\Migration;

class m161025_092250_add_positionColumn_forTeahers extends Migration
{
    public function up()
    {
        $this->addColumn("teachers","position",$this->string(255));
        $this->addColumn("teachers","position_ru",$this->string(255));
        $this->addColumn("teachers","position_en",$this->string(255));
    }

    public function down()
    {
        $this->dropColumn("teachers","position");
        $this->dropColumn("teachers","position_ru");
        $this->dropColumn("teachers","position_en");
    }
}
