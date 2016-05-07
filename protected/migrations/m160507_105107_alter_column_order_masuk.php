<?php

class m160507_105107_alter_column_order_masuk extends CDbMigration
{
	public function up()
	{   
            $this->addColumn('order_masuk', 'c_at', 'datetime');
            $this->addColumn('order_masuk', 'u_at', 'datetime');
            $this->addColumn('order_masuk', 'c_by', 'integer');
            $this->addColumn('order_masuk', 'u_by', 'integer');
	}

	public function down()
	{
		echo "m160507_105107_alter_column_order_masuk does not support migration down.\n";
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