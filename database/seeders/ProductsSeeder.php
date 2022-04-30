<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'id'                   => 1,
                'product_name'         => 'Asus X552CL-SX019D',
                'slug'                 => 'asus-X552CL-SX019D',
                'product_price'        => '20000',
                'description'          => 'Asus X552CL-SX019D',
                'brand'                => 'Asus',
                'meta_title'           => null,
                'meta_description'     => null,
                'meta_keyword'         => null,
                'model'                => 'THP2323',
                'image'                => 'https://www.91-img.com/pictures/laptops/asus/asus-x552cl-sx019d-core-i3-3rd-gen-4-gb-500-gb-dos-1-gb-61721-large-1.jpg',
                'status'               => 1,
                'sort_order'           => 1,
                'created_at'           => '2020-08-01 12:16:02',
                'updated_at'           => '2020-08-01 12:16:02',
            ],
            [
                'id'                   => 2,
                'product_name'         => 'ASUS X507',
                'slug'                 => 'ASUS-X507',
                'product_price'        => '30000',
                'description'          => 'ASUS X507 Core i5 - 8th Gen 15.6"',
                'brand'                => 'Asus',
                'meta_title'           => null,
                'meta_description'     => null,
                'meta_keyword'         => null,
                'model'                => 'THP2320',
                'image'                => 'https://images-na.ssl-images-amazon.com/images/I/81nreGN5qQL._SL1500_.jpg',
                'status'               => 1,
                'sort_order'           => 2,
                'created_at'           => '2020-08-01 12:16:02',
                'updated_at'           => '2020-08-01 12:16:02',
            ],
            [
                'id'                   => 3,
                'product_name'         => 'ASUS VivoBook S400CA',
                'slug'                 => 'asus-vivobook-S400CA',
                'product_price'        => '45000',
                'description'          => 'ASUS VivoBook S400CA',
                'brand'                => 'Asus',
                'meta_title'           => null,
                'meta_description'     => null,
                'meta_keyword'         => null,
                'model'                => 'THP2329',
                'image'                => 'https://images-na.ssl-images-amazon.com/images/I/81RrcHvDGbL._SY355_.jpg',
                'status'               => 1,
                'sort_order'           => 1,
                'created_at'           => '2020-08-01 12:16:02',
                'updated_at'           => '2020-08-01 12:16:02',
            ],
            [
                'id'                   => 4,
                'product_name'         => 'Yardly Sanitiser',
                'slug'                 => 'yardly-sanitiser',
                'product_price'        => '400',
                'description'          => 'Yardly Sanitiser',
                'brand'                => 'Yardly',
                'meta_title'           => null,
                'meta_description'     => null,
                'meta_keyword'         => null,
                'model'                => 'THP3321',
                'image'                => 'https://m.media-amazon.com/images/I/71fi68JmvBL._SL1500_.jpg',
                'status'               => 1,
                'sort_order'           => 1,
                'created_at'           => '2020-08-01 12:16:02',
                'updated_at'           => '2020-08-01 12:16:02',
            ],
            [
                'id'                   => 5,
                'product_name'         => 'Tia Wheel Chair',
                'slug'                 => 'tia-wheel-chair',
                'product_price'        => '1050',
                'description'          => 'Tia Wheel Chair',
                'brand'                => 'Tia Tech',
                'meta_title'           => null,
                'meta_description'     => null,
                'meta_keyword'         => null,
                'model'                => 'TIA2324',
                'image'                => 'https://cdn.shopify.com/s/files/1/0611/8739/1658/products/sss100sp_1_720x.jpg?v=1645083605',
                'status'               => 1,
                'sort_order'           => 1,
                'created_at'           => '2020-08-01 12:16:02',
                'updated_at'           => '2020-08-01 12:16:02',
            ],
            [
                'id'                   => 6,
                'product_name'         => 'Tia Mask',
                'slug'                 => 'tia-mask',
                'product_price'        => '250',
                'description'          => 'Tia Mask product',
                'brand'                => 'Tia Tech',
                'meta_title'           => null,
                'meta_description'     => null,
                'meta_keyword'         => null,
                'model'                => 'TIA2323',
                'image'                => 'https://www.adesso.com/wp-content/uploads/2020/06/PPE-100_1-650x650.jpg',
                'status'               => 1,
                'sort_order'           => 1,
                'created_at'           => '2020-08-01 12:16:02',
                'updated_at'           => '2020-08-01 12:16:02',
            ],
        ];

        Product::insert($products);
    }
}
