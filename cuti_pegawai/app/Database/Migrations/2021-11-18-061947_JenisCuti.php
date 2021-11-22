<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JenisCuti extends Migration
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
            "nama_jenis"       => [
                "type"           => "VARCHAR",
                "constraint"     => 255,
                "null" => false
            ]

        ];
        $this->forge->addField($fields);
        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("jenis_cuti", TRUE);
    }

    public function down()
    {
        $this->forge->dropTable("jenis_cuti");
    }
}
