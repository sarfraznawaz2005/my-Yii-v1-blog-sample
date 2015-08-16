<?php

class m150815_090824_posts extends CDbMigration
{
    public function up()
    {
        $this->createTable('posts', array(
            'id' => 'INTEGER PRIMARY KEY',
            'user_id' => 'INTEGER',
            'title' => 'TEXT',
            'content' => 'TEXT',
            'created' => 'INTEGER',
            'updated' => 'INTEGER'
        ));
    }

    public function down()
    {
        $this->dropTable('posts');
    }

    /*
    // Use safeUp/safeDown to do migration with transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}