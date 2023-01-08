<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Package;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PackageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Package::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'min_quantity' => $this->faker->randomNumber(2),
            'price_rate' => $this->faker->randomFloat(2, 5, 1000),
            'category_id' => Category::inRandomOrder()->pluck('id')->first(),
        ];
    }
}
