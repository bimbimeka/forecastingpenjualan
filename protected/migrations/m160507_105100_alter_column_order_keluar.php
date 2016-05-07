<?php

class m160507_105100_alter_column_order_keluar extends CDbMigration
{
	public function up()
	{
            $this->addColumn('order_keluar', 'c_at', 'datetime');
            $this->addColumn('order_keluar', 'u_at', 'datetime');
            $this->addColumn('order_keluar', 'c_by', 'integer');
            $this->addColumn('order_keluar', 'u_by', 'integer');
	}

	public function down()
	{
		echo "m160507_105100_alter_column_order_keluar does not support migration down.\n";
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