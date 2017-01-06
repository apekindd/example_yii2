<?php

use yii\db\Migration;

class m161017_090247_delete_columns_in_levels extends Migration
{
    public function up()
    {
        $this->dropColumn('levels', 'abbreviation');
        $this->dropColumn('levels', 'abbreviation_detail');
        $this->dropColumn('levels', 'level');
        $this->renameColumn('levels', 'level_detail', 'left_column');
        $this->renameColumn('levels', 'level_detail_ru', 'left_column_ru');
        $this->renameColumn('levels', 'level_detail_en', 'left_column_en');
    }

    public function down()
    {
        $this->addColumn('levels', 'abbreviation','text');
        $this->addColumn('levels', 'abbreviation_detail', 'text');
        $this->addColumn('levels', 'level', 'text');
        $this->renameColumn('levels', 'left_column', 'level_detail');
        $this->renameColumn('levels', 'left_column_ru', 'level_detail_ru');
        $this->renameColumn('levels', 'left_column_en', 'level_detail_en');
    }

}
