<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name' => Str::random(10),
            'image' => Str::random(10).'.png',
            'createdBy' => 1,
            'isDeleted' => 1,
            
        ]);
    }
}
