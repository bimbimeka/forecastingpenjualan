<?php

class m160507_095751_alter_column_user extends CDbMigration
{
	public function up()
	{
            $this->addColumn('user', 'nama', 'string AFTER username');
            $this->addColumn('user', 'level', 'integer AFTER `nama`');
	}

	public function down()
	{
		echo "m160507_095751_alter_column_user does not support migration down.\n";
		return false;
	}


}