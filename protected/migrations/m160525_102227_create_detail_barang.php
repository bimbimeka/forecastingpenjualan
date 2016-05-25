<?php

class m160525_102227_create_detail_barang extends CDbMigration
{
	public function up()
	{
		$columns = array(
		'id' => 'pk',
			'barcode' => 'integer',
			'size' => 'string',
			'stock_awal' => 'integer',
			'bm' => 'integer',
			'bk' => 'integer',
			'stock_akhir' => 'integer',
			'id_barang' => 'integer',
			'c_at' => 'date',
			'c_by' => 'string',
			'u_at' => 'date',
			'u_by' => 'string',
			'status' => 'string',
		);
		$this->createTable('detail_barang',$columns);
	}

	public function down()
	{
		$this->dropTable('detail_barang');
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