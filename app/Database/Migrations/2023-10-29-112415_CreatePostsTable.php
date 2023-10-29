<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePostsTable extends Migration
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
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'content' => [
                'type' => 'TEXT',
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
             'created_at datetime default current_timestamp',
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('posts');
          // Create foreign key userDetails table
        $this->forge->addColumn('posts', [
            'category_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'null' => true,
            ]
        ]);
        $this->forge->addForeignKey('user_details_id', 'categories', 'id');

    }



    public function down()
    {
        $this->forge->dropTable('posts');
    }
}
