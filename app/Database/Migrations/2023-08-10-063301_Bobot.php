<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bobot extends Migration
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
			'id_employee'       => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'umur'       => [
				'type'           => 'DECIMAL',
				'constraint'     => "5,2",
			],
			'pendidikan'       => [
				'type'           => 'DECIMAL',
				'constraint'     => "5,2",
			],
			'keahlian'       => [
				'type'           => 'DECIMAL',
				'constraint'     => "5,2",
			],
			'masa_kerja'       => [
				'type'           => 'DECIMAL',
				'constraint'     => "5,2",
			],
			'kehadiran'       => [
				'type'           => 'DECIMAL',
				'constraint'     => "5,2",
			],
			'tanggung_jawab'       => [
				'type'           => 'DECIMAL',
				'constraint'     => "5,2",
			],
			'kejujuran'       => [
				'type'           => 'DECIMAL',
				'constraint'     => "5,2",
			],
			'prestasi'       => [
				'type'           => 'DECIMAL',
				'constraint'     => "5,2",
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
		$this->forge->createTable('bobot');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('bobot');
	}
}
