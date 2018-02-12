<?php

use yii\db\Migration;

/**
 * Handles the creation of table `scheme`.
 */
class m180202_105539_create_scheme_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('scheme', [
            'id' => $this->primaryKey(),
            'text' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('scheme');
    }
}
