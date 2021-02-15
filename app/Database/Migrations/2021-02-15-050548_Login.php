<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Login extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'password'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('tbl_users', TRUE);
	}

	public function down()
	{
		//
	}
}
