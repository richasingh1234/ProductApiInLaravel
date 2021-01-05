<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Brand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $users = User::all()->pluck('id')->toArray();
        return [
            'name' => $this->faker->name,
            'createdBy' => 1,
            'image' => $this->faker->image,
            'isDeleted' => 1,
        ];
    }
}
