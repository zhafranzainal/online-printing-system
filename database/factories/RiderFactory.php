<?php

namespace Database\Factories;

use App\Models\Rider;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class RiderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'total_commission' => $this->faker->randomFloat(2, 5, 100),
            'user_id' => User::inRandomOrder()->pluck('id')->first(),
        ];
    }
}
