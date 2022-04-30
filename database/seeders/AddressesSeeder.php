<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addresses = [
            [
                'id'                   => 1,
                'user_id'              => 1,
                'address_line1'        => 'Thotakatukara',
                'address_line2'        => 'Aluva',
                'district'             => 'Eranakulam',
                'state'                => 'Kerala',
                'pincode'              => '673611',
                'is_default'           =>  1,
                'created_at'           => '2020-08-01 12:16:02',
                'updated_at'           => '2020-08-01 12:16:02',
            ],
            [
                'id'                   => 2,
                'user_id'              => 1,
                'address_line1'        => 'Kottumal',
                'address_line2'        => 'Kakkodi',
                'district'             => 'Kozhikode',
                'state'                => 'Kerala',
                'pincode'              => '673615',
                'is_default'           =>  0,
                'created_at'           => '2020-08-01 12:16:02',
                'updated_at'           => '2020-08-01 12:16:02',
            ],
            [
                'id'                   => 3,
                'user_id'              => 2,
                'address_line1'        => 'Ashirvad',
                'address_line2'        => 'Kollodithazhath',
                'district'             => 'Kozhikode',
                'state'                => 'Kerala',
                'pincode'              => '673610',
                'is_default'           =>  1,
                'created_at'           => '2020-08-01 12:16:02',
                'updated_at'           => '2020-08-01 12:16:02',
            ],
            [
                'id'                   => 4,
                'user_id'              => 2,
                'address_line1'        => 'Kollodithazhth',
                'address_line2'        => 'Kizhakkumuri',
                'district'             => 'Kozhikode',
                'state'                => 'Kerala',
                'pincode'              => '673612',
                'is_default'           =>  0,
                'created_at'           => '2020-08-01 12:16:02',
                'updated_at'           => '2020-08-01 12:16:02',
            ],
        ];

        Address::insert($addresses);
    }
}
