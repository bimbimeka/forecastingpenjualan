<?php

class m160501_164506_create_table_ordermasuk extends CDbMigration
{
	public function up()
	{
		$columns = array(
			'id' => 'pk',
			'tanggal_order' => 'date',
			'nama' => 'string',
			'id_barang' => 'integer',
			'qty' => 'integer',
			'harga_bahan' => 'double',
			'id_sablon' => 'integer',
			'id_jahit' => 'integer',
			'total_sablon' => 'double',
			'total_jahit' => 'double',
			'total_all' => 'double',
		);
		$this->createTable('order_masuk',$columns);
	}

	public function down()
	{
		$this->dropTable('order_masuk');
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