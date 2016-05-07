<?php

class m160507_103018_alter_column_user_2 extends CDbMigration
{
	public function up()
	{
            $this->dropColumn('user', 'level');
            $this->addColumn('user', 'level', 'enum("administrator","keyuser","enduser")');
	}

	public function down()
	{
		echo "m160507_103018_alter_column_user_2 does not support migration down.\n";
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