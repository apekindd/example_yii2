<?php

use yii\db\Migration;

class m161213_114910_fix_exam_columns extends Migration
{
    public function up()
    {
        $this->addColumn('exam_request','price', $this->float());

        $this->addColumn('exam_date','duration', $this->integer(5));

        $this->addColumn('exam_item','description', $this->text());
        $this->addColumn('exam_item','description_ru', $this->text());
        $this->addColumn('exam_item','description_en', $this->text());
    }

    public function down()
    {
        $this->dropColumn('exam_request','price');

        $this->dropColumn('exam_date','duration');

        $this->dropColumn('exam_item','description');
        $this->dropColumn('exam_item','description_ru');
        $this->dropColumn('exam_item','description_en');
    }
}
