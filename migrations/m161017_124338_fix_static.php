<?php

use yii\db\Migration;

class m161017_124338_fix_static extends Migration
{
    public function up()
    {
        $this->addColumn('static_page', 'section', 'string not null');
        $this->update('static_page', ['section'=>'about'], ['ID' => [3,4]]);
        $this->update('static_page', ['section'=>'study'], ['ID' => [5,6,7,8,9,10]]);
    }

    public function down()
    {
        $this->dropColumn('static_page', 'section');
    }
}
