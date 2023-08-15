<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kejujuran extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
			],
			'nama_kriteria'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '20',
			],
			'bobot'       => [
				'type'           => 'DECIMAL',
				'constraint'     => '5,2',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			]

		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('kejujuran');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('kejujuran');
	}
}
