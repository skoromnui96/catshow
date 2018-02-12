<?php

use yii\db\Migration;

/**
 * Handles the creation of table `programm`.
 */
class m180202_105609_create_programm_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('programm', [
            'id' => $this->primaryKey(),
            'day' => $this->string(),
            'from' => $this->integer(),
            'to' => $this->integer(),
            'description' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('programm');
    }
}
