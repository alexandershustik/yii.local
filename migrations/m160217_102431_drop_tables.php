<?php

use yii\db\Migration;

class m160217_102431_drop_tables extends Migration
{
    public function safeUp()
    {
        $this->dropTable('user');
    }

    public function safeDown()
    {
        return false;
    }
}
