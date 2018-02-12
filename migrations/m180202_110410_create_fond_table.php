<?php

use yii\db\Migration;

/**
 * Handles the creation of table `fond`.
 */
class m180202_110410_create_fond_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('fond', [
            'id' => $this->primaryKey(),
            'description' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('fond');
    }
}
