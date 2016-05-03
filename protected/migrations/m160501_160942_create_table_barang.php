<?php

class m160501_160942_create_table_barang extends CDbMigration
{
	public function up()
	{
		$columns = array(
			'id' => 'pk',
			'barcode' => 'integer',
			'jenis' => 'string',
			'artikel' => 'string',
			'size' => 'string',
			'stock_awal' => 'integer',
			'bm' => 'integer',
			'bk' => 'integer',
			'stock_akhir' => 'integer',
			'c_at' => 'date',
			'c_by' => 'string',
			'u_at' => 'date',
			'u_by' => 'string',
			'status' => 'string',
		);
		$this->createTable('barang',$columns);
	}

	public function down()
	{
		$this->dropTable('barang');
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