<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Modules\User\Core\Entities\UserEntity;

class PostsSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        $userModel = new UserEntity();
        $ids = $userModel->select('id')->asArray()->findAll();
        $ids = array_column($ids, 'id');
        for ($i = 0; $i < 50; $i++) {
            $data = [
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'category_id' => rand(1, 10), // Assuming 10 categories exist
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'user_id' => $faker->randomElement($ids),
            ];

            $this->db->table('posts')->insert($data);
        }
    }
}
