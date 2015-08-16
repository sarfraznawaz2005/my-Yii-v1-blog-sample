<?php

class m150815_090839_comments extends CDbMigration
{
    public function up()
    {
        $this->createTable('comments', array(
            'id' => 'INTEGER PRIMARY KEY',
            'post_id' => 'INTEGER',
            'name' => 'TEXT',
            'email' => 'TEXT',
            'content' => 'TEXT',
            'created' => 'INTEGER',
            'updated' => 'INTEGER'
        ));
    }

    public function down()
    {
        $this->dropTable('comments');
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