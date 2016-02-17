<?php

use yii\db\Migration;

class m160217_093253_create_user_table extends Migration
{
    public function up()
    {
        $this->createTable('user', ['id' => 'pk', 'email' => 'string NOT NULL', 'password' => 'string NOT NULL']);
    }

    public function down()
    {
        $this->dropTable('user');
    }
}
