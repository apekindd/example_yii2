<?php

use yii\db\Migration;

class m161117_113619_fixShortColumnsImg extends Migration
{
    public function up()
    {
        $this->alterColumn('offers', 'img', 'text');
        $this->alterColumn('courses', 'img', 'text');
        $this->alterColumn('blog', 'img', 'text');
        $this->alterColumn('news', 'prev_img', 'text');
        $this->alterColumn('reviews', 'img', 'text');
        $this->alterColumn('tutors', 'img', 'text');
    }

    public function down()
    {
        $this->alterColumn('offers', 'img', 'string');
        $this->alterColumn('courses', 'img', 'string');
        $this->alterColumn('blog', 'img', 'string');
        $this->alterColumn('news', 'prev_img', 'string');
        $this->alterColumn('reviews', 'img', 'string');
        $this->alterColumn('tutors', 'img', 'string');
    }
}
