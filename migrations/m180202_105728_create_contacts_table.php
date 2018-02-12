<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contacts`.
 */
class m180202_105728_create_contacts_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('contacts', [
            'id' => $this->primaryKey(),
            'place' => $this->string(),
            'address' => $this->string(),
            'phone' => $this->string(),
            'email' => $this->string(),
            'vk_link' => $this->string(),
            'in_link' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contacts');
    }
}
