<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Karyawan extends Migration
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
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'alamat'    => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'posisi' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'gaji' => [
                'type'           => 'INT',
                'constraint'     => '10'
            ]
        ]);
        $this->forge->addKey('id', TRUE);

        $this->forge->createTable('karyawans', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('karyawans');
    }
}
