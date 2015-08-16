<?php

class m150815_090845_users extends CDbMigration
{
	public function up()
	{
		$this->createTable('users', array(
			'id' => 'INTEGER PRIMARY KEY',
			'name' => 'TEXT',
			'email' => 'TEXT',
			'password' => 'TEXT',
			'created' => 'INTEGER',
			'updated' => 'INTEGER'
		));
	}

	public function down()
	{
		$this->dropTable('users');
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