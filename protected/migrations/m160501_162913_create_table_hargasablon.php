<?php

class m160501_162913_create_table_hargasablon extends CDbMigration
{
	public function up()
	{
		$columns = array(
			'id' => 'pk',
			'ongkos' => 'double',
			'cat' => 'double',
			'listrik' => 'double',
			'makan' => 'double',
			'press' => 'double',
			'dll' => 'double',
			'c_at' => 'date',
			'c_by' => 'string',
			'u_at' => 'date',
			'u_by' => 'string',
			'status' => 'string',
		);
		$this->createTable('harga_sablon',$columns);
	}

	public function down()
	{
		$this->dropTable('harga_sablon');
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