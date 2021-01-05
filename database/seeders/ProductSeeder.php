<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{

    

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('products')->insert([
            'name' => 'T-Shirt',
            'image' => Str::random(10).'.png',
            'isDeleted' => '1',
            'price' => rand(5000,1000000),
            'sku' => Str::random(10),
            'mrp_price' => rand(5000,1000000),
            'brand_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Jeans',
            'image' => Str::random(10).'.png',
            'isDeleted' => '0',
            'price' => rand(5000,1000000),
            'sku' => Str::random(10),
            'mrp_price' => rand(5000,1000000),
            'brand_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Makeup',
            'image' => Str::random(10).'.png',
            'isDeleted' => '0',
            'price' => rand(5000,1000000),
            'sku' => Str::random(10),
            'mrp_price' => rand(5000,1000000),
            'brand_id' => 1,
        ]);
    }
}
