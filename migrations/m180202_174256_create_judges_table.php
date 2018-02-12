<?php

use yii\db\Migration;

/**
 * Handles the creation of table `judges`.
 */
class m180202_174256_create_judges_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('judges', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'profession' => $this->string(),
            'category' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('judges');
    }
}
