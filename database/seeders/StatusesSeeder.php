<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            [
                'id'         => 1,
                'name'      => 'Open',
                'created_at' => '2022-02-04 19:16:02',
                'updated_at' => '2022-02-04 19:16:02',
            ],
            [
                'id'         => 2,
                'name'      => 'Picked',
                'created_at' => '2022-02-04 19:16:02',
                'updated_at' => '2022-02-04 19:16:02',
            ],
            [
                'id'         => 3,
                'name'      => 'Delivered',
                'created_at' => '2022-02-04 19:16:02',
                'updated_at' => '2022-02-04 19:16:02',
            ],
            [
                'id'         => 4,
                'name'      => 'Cancelled',
                'created_at' => '2022-02-04 19:16:02',
                'updated_at' => '2022-02-04 19:16:02',
            ],
        ];

        Status::insert($statuses);
    }
}
