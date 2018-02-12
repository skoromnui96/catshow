<?php

use yii\db\Migration;

/**
 * Handles the creation of table `cats`.
 */
class m180202_105650_create_cats_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('cats', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('cats');
    }
}
