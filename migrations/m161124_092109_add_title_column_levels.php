<?php

use yii\db\Migration;

class m161124_092109_add_title_column_levels extends Migration
{
    public function up()
    {
        $this->addColumn('levels','title', $this->string(255));
    }

    public function down()
    {
        $this->dropColumn('levels','title');
    }
}
