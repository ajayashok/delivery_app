<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id'         => 1,
                'name'      => 'Customer',
                'created_at' => '2022-02-04 19:16:02',
                'updated_at' => '2022-02-04 19:16:02',
            ],
            [
                'id'         => 2,
                'name'      => 'Delivery Boy',
                'created_at' => '2022-02-04 19:16:02',
                'updated_at' => '2022-02-04 19:16:02',
            ],
        ];

        Role::insert($roles);
    }
}
