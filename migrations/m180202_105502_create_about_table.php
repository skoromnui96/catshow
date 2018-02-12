<?php

use yii\db\Migration;

/**
 * Handles the creation of table `about`.
 */
class m180202_105502_create_about_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('about', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('about');
    }
}
