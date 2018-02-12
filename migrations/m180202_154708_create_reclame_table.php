<?php

use yii\db\Migration;

/**
 * Handles the creation of table `reclame`.
 */
class m180202_154708_create_reclame_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('reclame', [
            'id' => $this->primaryKey(),
            'name' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('reclame');
    }
}
