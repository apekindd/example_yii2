<?php

use yii\db\Migration;

/**
 * Handles the creation for table `static_text`.
 */
class m161219_094904_create_static_text_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('static_text', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'content' => $this->text(),
            'content_ru' => $this->text(),
            'content_en' => $this->text()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('static_text');
    }
}
