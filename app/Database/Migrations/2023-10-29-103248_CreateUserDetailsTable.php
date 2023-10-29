<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserDetailsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'user_token' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['active', 'blocked', 'verified'],
                'default' => 'active',
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('user_details');
    }

    public function down()
    {
        $this->forge->dropTable('user_details');
    }
}
