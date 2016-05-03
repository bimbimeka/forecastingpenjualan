<?php

class m160501_164103_create_table_user extends CDbMigration
{
	public function up()
	{
		$columns = array(
			'id' => 'pk',
			'user_id' => 'integer',
			'username' => 'string',
			'password' => 'string',
			
		);
		$this->createTable('user',$columns);
	}

	public function down()
	{
		$this->dropTable('user');
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