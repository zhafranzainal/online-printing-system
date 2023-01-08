<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\DeliveryOption;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryOptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DeliveryOption::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 5, 30),
        ];
    }
}
