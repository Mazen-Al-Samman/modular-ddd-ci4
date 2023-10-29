<?php

namespace App\Database\Seeds;

use Faker\Factory;
use CodeIgniter\Database\Seeder;
use Modules\User\Core\Entities\UserEntity;

class UserDetailsSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $data = [];

        $userModel = new UserEntity();
        $ids = $userModel->select('id')->asArray()->findAll();
        foreach ($ids as $id) {
            $data[] = [
                'user_id' => $id['id'],
                'user_token' => $faker->sha256,
                'status' => $faker->randomElement(['active', 'blocked', 'verified']),
            ];
        }

        $this->db->table('user_details')->insertBatch($data);
    }
}
