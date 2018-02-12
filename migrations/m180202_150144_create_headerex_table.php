<?php

use yii\db\Migration;

/**
 * Handles the creation of table `headerex`.
 */
class m180202_150144_create_headerex_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('headerex', [
            'id' => $this->primaryKey(),
            'date' => $this->string(),
            'title' => $this->string(),
            'description' => $this->string(),
            'date_begin' => $this->dateTime()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('headerex');
    }
}
