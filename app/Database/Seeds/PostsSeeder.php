<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostsSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            $data = [
                'title'       => $faker->sentence,
                'content'     => $faker->paragraph,
                'category_id' => rand(1, 10), // Assuming 10 categories exist
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ];

            $this->db->table('posts')->insert($data);
        }
    }
}
