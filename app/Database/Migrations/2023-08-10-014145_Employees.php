<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Employees extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '25',
			],
			'nama_pegawai'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'usia'       => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'pendidikan'       => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'keahlian'       => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'masa_kerja'       => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'kehadiran'       => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'tanggung_jawab'       => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'kejujuran'       => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'prestasi_kerja'       => [
				'type'           => 'INT',
				'constraint'     => 5,
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
		$this->forge->createTable('pegawai');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('pegawai');
	}
}
