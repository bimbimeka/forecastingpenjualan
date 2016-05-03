<?php

class m160501_163730_create_table_hargajahit extends CDbMigration
{
	public function up()
	{
		$columns = array(
			'id' => 'pk',
			'ongkos' => 'double',
			'potong' => 'double',
			'steam' => 'double',
			'plastik' => 'double',
			'gas' => 'double',
			'listrik' => 'double',
			'makan' => 'double',
			'benang' => 'double',
			'c_at' => 'date',
			'c_by' => 'string',
			'u_at' => 'date',
			'u_by' => 'string',
			'status' => 'string',
		);
		$this->createTable('harga_jahit',$columns);
	}

	public function down()
	{
		$this->dropTable('harga_jahit');
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