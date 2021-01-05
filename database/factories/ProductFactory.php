<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'sku' => $this->faker->unique(),
            'price' => rand(5000,1000000),
            'mrp_price' => rand(5000,1000000),
            'image' => $this->faker->image,
            'brandId' => 1,
            'isDeleted' => 1,
            'created_at' => $this->faker->dateTime($max = 'now'),
            'updated_at' => $this->faker->dateTime($max = 'now'),
        ];
    }
}

