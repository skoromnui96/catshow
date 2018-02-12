<?php

use yii\db\Migration;

/**
 * Handles the creation of table `headersl1`.
 */
class m180202_155503_create_headersl1_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('headersl1', [
            'id' => $this->primaryKey(),
            'name' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('headersl1');
    }
}
