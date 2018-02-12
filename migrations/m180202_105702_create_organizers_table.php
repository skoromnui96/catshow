<?php

use yii\db\Migration;

/**
 * Handles the creation of table `organizers`.
 */
class m180202_105702_create_organizers_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('organizers', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->string(),
            'text' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('organizers');
    }
}
