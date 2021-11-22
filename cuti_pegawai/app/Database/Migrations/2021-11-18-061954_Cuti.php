<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cuti extends Migration
{
    public function up()
    {
        $fields = [
            "id"          => [
                "type"           => "INT",
                "constraint"     => 11,
                "unsigned"       => true,
                "auto_increment" => true
            ],
            "pegawai_id"          => [
                "type"           => "INT",
                "constraint"     => 11,
                "unsigned"       => true,
            ],
            "jenis_cuti id"          => [
                "type"           => "INT",
                "constraint"     => 11,
                "unsigned"       => true,
            ],
            "tanggal_mulai"      => [
                "type"           => "DATE",
                "null" => false
            ],
            "tanggal_selesai" => [
                "type"           => "DATE",
                "null" => false
            ],
            "tanggal_pengajuan" => [
                "type"           => "DATE",
                "null" => false
            ],
            "tanggal_approval"      => [
                "type"           => "DATE",
                "null" => true
            ],
            "keterangan"      => [
                "type"           => "TEXT",
                "constraint"     => 255,
                "null" => false
            ],
            "bukti"      => [
                "type"           => "VARCHAR",
                "constraint"     => 255,
                "null" => false
            ],
            "status"      => [
                "type"           => "ENUM",
                "constraint"     => ["0", "1"],
                "null" => true
            ]
        ];
        
        $this->forge->addField($fields);
        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("cuti", TRUE);
    }

    public function down()
    {
        $this->forge->dropTable("cuti");
    }
}
