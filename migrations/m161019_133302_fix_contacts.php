<?php

use yii\db\Migration;

class m161019_133302_fix_contacts extends Migration
{
    public function up()
    {
        $this->dropColumn('contacts', 'map');
        $this->addColumn('contacts', 'lat', 'string(20) NOT NULL');
        $this->addColumn('contacts', 'lng', 'string(20) NOT NULL');
    }

    public function down()
    {
        $this->addColumn('contacts', 'map','text');
        $this->dropColumn('contacts', 'lat');
        $this->dropColumn('contacts', 'lng');
    }
}
