<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FkUserLevel extends Migration
{
    public function up()
    {
        $this->forge->addForeignKey("user_id", "user", "id");
    }

    public function down()
    {
        $this->forge->dropForeignKey("level", "user_id");
    }
}
