<?php

use yii\db\Migration;

class m160217_103647_create_redrop extends Migration
{
    public function safeUp()
    {
        $this->dropTable('post');        
        $this->dropTable('user');
    }

    public function safeDown()
    {
        return false;
    }
}
