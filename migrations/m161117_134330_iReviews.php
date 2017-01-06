<?php

use yii\db\Migration;

class m161117_134330_iReviews extends Migration
{
    public function up()
    {
        $this->update('reviews', [
            'img'=>'{"img":"review-img.jpg","alt":"name","title":"surname"}'
        ]);
    }

    public function down()
    {
        $this->update('reviews', [
            'img'=>''
        ]);
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
