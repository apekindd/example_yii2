<?php

use yii\db\Migration;

class m161026_081009_celta_date_stringto_text extends Migration
{
    public function up()
    {
        $this->alterColumn('trainings', 'date', 'text');
        $this->update('trainings', ['date'=>'<ul><li>full-time </li><li>18.01.16 – 12.02.16</li><li> 06.06.16 – 01.07.16</li><li> 04.07.16 – 29.07.16</li><li>04.07.16 – 29.07.16 </li><li>01.08.16 – 26.08.16 </li></ul><ul><li>part-time </li><li>15.01.16 – 09.04.16</li><li>16.09.16 – 12.12.16</li><li></ul>'], ['ID' => [6]]);
    }

    public function down()
    {
        $this->update('trainings', ['date'=>'<ul><li>full-time </li><li>18.01.16 – 12.02.16</li><li> 06.06.16 – 01.07.16</li><li> 04.07.16 – 29.07.16</li><li>04.07.16 – 29.07.16 </li><li>01.08.16 – 26.08.16 </li></ul>'], ['ID' => [6]]);
        $this->alterColumn('trainings', 'date', 'string');
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
