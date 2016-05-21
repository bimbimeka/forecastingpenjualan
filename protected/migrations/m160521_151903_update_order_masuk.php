<?php

class m160521_151903_update_order_masuk extends CDbMigration
{
	public function up()
	{
            $this->addColumn('order_masuk', 'harga', 'decimal');
	}

	public function down()
	{
		echo "m160521_151903_update_order_masuk does not support migration down.\n";
		return false;
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