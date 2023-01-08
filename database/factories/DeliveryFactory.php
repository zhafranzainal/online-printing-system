<?php

namespace Database\Factories;

use App\Models\Delivery;
use App\Models\Receipt;
use App\Models\Rider;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Delivery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'commission_fee' => $this->faker->randomFloat(2, 5, 30),
            'delivered_date' => $this->faker->dateTime,
            'receipt_id' => Receipt::inRandomOrder()->pluck('id')->first(),
            'rider_id' => Rider::inRandomOrder()->pluck('id')->first(),
        ];
    }
}
