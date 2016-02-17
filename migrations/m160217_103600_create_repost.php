<?php

use yii\db\Migration;

class m160217_103600_create_repost extends Migration
{
    public function safeUp()
    {
        $this->createTable('post', ['id' => 'pk', 'post' => 'text', 'user_id' => 'int']);
        $this->addForeignKey('post_user_id', 'post', 'user_id', 'user', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('post');
    }
}
