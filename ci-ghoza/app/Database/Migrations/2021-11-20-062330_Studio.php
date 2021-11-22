<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Studio extends Migration
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
            "nama_studio"       => [
                "type"           => "VARCHAR",
                "constraint"     => 255,
                "null" => false
            ],
            "gambar"       => [
                "type"           => "VARCHAR",
                "constraint"     => 255,
                "null" => false
            ],
            "deskripsi"      => [
                "type"           => "VARCHAR",
                "constraint"     => 255,
                "null" => false
            ],
            "harga"      => [
                "type"           => "INT",
                "constraint"     => 255,
                "null" => false
            ]
        ];

        $this->forge->addField($fields);
        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("studio", TRUE);
    }

    public function down()
    {
        //
    }
}
