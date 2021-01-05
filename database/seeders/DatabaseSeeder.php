<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Brand;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // Model::unguard();


        User::factory(10)->create();
        //  Brand::factory(10)->create();

        $this->call([
            // UserSeeder::class,
            BrandSeeder::class,
            ProductSeeder::class,
            
        ]);
        //  factory(ProductFactory::class, 100)->create();


        // Model::reguard();

    }
}
