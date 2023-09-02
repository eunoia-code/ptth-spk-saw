<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Criteria extends Migration
{
    public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '25',
			],
			'nama_kriteria'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '20',
			],
			'jenis'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '10',
			],
			'bobot'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '5',
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
		$this->forge->createTable('kriteria');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('kriteria');
	}
}
