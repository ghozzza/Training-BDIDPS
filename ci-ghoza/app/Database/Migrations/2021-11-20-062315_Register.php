<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Register extends Migration
{
    public function up()
    {
        $fields = [
            "ID"          => [
                "type"           => "INT",
                "constraint"     => 11,
                "unsigned"       => true,
                "auto_increment" => true
            ],
            "First_Name"       => [
                "type"           => "VARCHAR",
                "constraint"     => 255,
                "null" => false
            ],
            "Last_Name"       => [
                "type"           => "VARCHAR",
                "constraint"     => 255,
                "null" => false
            ],
            "Email"      => [
                "type"           => "VARCHAR",
                "constraint"     => 255,
                "null" => false
            ],
            "Password"      => [
                "type"           => "VARCHAR",
                "constraint"     => 255,
                "null" => false
            ],
            "File" => [
                "type"           => "VARCHAR",
                "constraint"     => 255,
                "null" => false
            ],
            "Level" => [
                "type"           => "INT",
                "constraint"     => 255,
                "null" => false
            ]
            

        ];

        $this->forge->addField($fields);
        $this->forge->addPrimaryKey("ID");
        $this->forge->addUniqueKey("email");
        $this->forge->createTable("register", TRUE);
    }

    public function down()
    {
        //
    }
}
