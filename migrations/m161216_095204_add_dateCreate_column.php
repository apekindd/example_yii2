<?php

use yii\db\Migration;

class m161216_095204_add_dateCreate_column extends Migration
{
    public function up()
    {
        $this->addColumn('exam_request','date_create',$this->string(11));
    }

    public function down()
    {
        $this->dropColumn('exam_request','date_create');
    }
}
