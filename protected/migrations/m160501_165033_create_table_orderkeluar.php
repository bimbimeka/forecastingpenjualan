<?php

class m160501_165033_create_table_orderkeluar extends CDbMigration
{
	public function up()
	{
		$columns = array(
			'id' => 'pk',
			'tanggal_order' => 'date',
			'id_order_masuk' => 'integer',
			'qty_awal' => 'integer',
			'qty_akhir' => 'integer',
		);
		$this->createTable('order_keluar',$columns);
	}

	public function down()
	{
		$this->dropTable('order_keluar');
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