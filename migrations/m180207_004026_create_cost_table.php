<?php

use yii\db\Migration;

/**
 * Handles the creation of table `cost`.
 */
class m180207_004026_create_cost_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('cost', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'th11' => $this->string(),
            'th12' => $this->string(),
            'th13' => $this->string(),
            'th14' => $this->string(),
            'td21' => $this->string(),
            'td22' => $this->string(),
            'td23' => $this->string(),
            'td24' => $this->string(),
            'td31' => $this->string(),
            'td32' => $this->string(),
            'td33' => $this->string(),
            'td34' => $this->string(),
            'td41' => $this->string(),
            'td42' => $this->string(),
            'td43' => $this->string(),
            'td44' => $this->string(),
            'td51' => $this->string(),
            'td52' => $this->string(),
            'td53' => $this->string(),
            'td54' => $this->string(),
            'td61' => $this->string(),
            'td71' => $this->string(),
            'td81' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('cost');
    }
}
