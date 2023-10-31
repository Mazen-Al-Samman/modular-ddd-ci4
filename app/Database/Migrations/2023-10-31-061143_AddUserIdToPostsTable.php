<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUserIdToPostsTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('posts', [
            'user_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('posts', 'user_id');
    }
}
