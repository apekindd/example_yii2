<?php

use yii\db\Migration;

/**
 * Handles the creation for table `email`.
 */
class m161116_110804_create_email_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('email', [
            'id'       => $this->primaryKey(),
            'email'    => $this->string(255),
            'category' => $this->string(255)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('email');
    }
}
