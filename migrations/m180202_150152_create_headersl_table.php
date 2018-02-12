<?php

use yii\db\Migration;

/**
 * Handles the creation of table `headersl`.
 */
class m180202_150152_create_headersl_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('headersl', [
            'id' => $this->primaryKey(),
            'name' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('headersl');
    }
}
