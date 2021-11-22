<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
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
            "id_studio"       => [
                "type"           => "INT",
                "constraint"     => 11,
                "unsigned"       => true,
                "null" => false
            ],
            "id_user"       => [
                "type"           => "INT",
                "constraint"     => 11,
                "unsigned"       => true,
                "null" => false
            ],
            "catatan"      => [
                "type"           => "VARCHAR",
                "constraint"     => 255,
                "null" => true
            ],
            "jam"      => [
                "type"           => "INT",
                "constraint"     => 11,
                "null" => false
            ],
            "tanggal" => [
                "type"           => "DATE",
                "null" => false
            ],
        ];

        $this->forge->addField($fields);
        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("transaksi", TRUE);
    }

    public function down()
    {
        //
    }
}
