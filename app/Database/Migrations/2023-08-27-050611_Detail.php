<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Detail extends Migration
{
    public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '25',
			],
			'jenis_kelamin'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'alamat'       => [
				'type'           => 'TEXT',
			],
			'hp'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '15',
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
		$this->forge->createTable('biodata');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('biodata');
	}
}
