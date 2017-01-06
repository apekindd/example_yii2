<?php

use yii\db\Migration;

class m161027_134731_insert_contacts_coordinates extends Migration
{
    public function up()
    {
        $this->update('contacts', ['lat'=>'50.453363','lng'=>'30.468197','name'=>'Школа на КПИ'],'id=1');
        $this->update('contacts', ['lat'=>'50.406156','lng'=>'30.614322','name'=>'Школа на Осокорках'],'id=2');
        $this->update('contacts', ['lat'=>'50.511873','lng'=>'30.492402','name'=>'Школа на Оболони'],'id=3');
    }

    public function down()
    {
        $this->update('contacts', ['lat'=>'','lng'=>'','name'=>''],'id=1');
        $this->update('contacts', ['lat'=>'','lng'=>'','name'=>''],'id=2');
        $this->update('contacts', ['lat'=>'','lng'=>'','name'=>''],'id=3');
    }

}
