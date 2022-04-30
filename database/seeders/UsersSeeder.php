<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Ajay',
                'role_id'        => 1,
                'email'          => 'ajay@customer.in',
                'password'       => Hash::make('123456'),
                'image'          => 'profile.png',
                'remember_token' => null,
                'created_at'     => '2020-08-01 12:16:02',
                'updated_at'     => '2020-08-01 12:16:02',
            ],
            [
                'id'             => 2,
                'name'           => 'Rahul',
                'role_id'        => 1,
                'email'          => 'rahul@customer.in',
                'password'       => Hash::make('123456'),
                'image'          => 'profile.png',
                'remember_token' => null,
                'created_at'     => '2020-08-01 12:16:02',
                'updated_at'     => '2020-08-01 12:16:02',
            ],
            [
                'id'             => 3,
                'name'           => 'Rohith',
                'role_id'        => 2,
                'email'          => 'rohith@deliver.in',
                'password'       => Hash::make('123456'),
                'image'          => 'profile.png',
                'remember_token' => null,
                'created_at'     => '2020-08-01 12:16:02',
                'updated_at'     => '2020-08-01 12:16:02',
            ],
            [
                'id'             => 4,
                'name'           => 'Arun',
                'role_id'        => 2,
                'email'          => 'arun@deliver.in',
                'password'       => Hash::make('123456'),
                'image'          => 'profile.png',
                'remember_token' => null,
                'created_at'     => '2020-08-01 12:16:02',
                'updated_at'     => '2020-08-01 12:16:02',
            ],
        ];

        User::insert($users);
    }
}
