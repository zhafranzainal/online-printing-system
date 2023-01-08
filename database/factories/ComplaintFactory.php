<?php

namespace Database\Factories;

use App\Models\Complaint;
use App\Models\Delivery;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComplaintFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Complaint::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->text(255),
            'status' => 'open',
            'date_received' => $this->faker->dateTime,
            'delivery_id' => Delivery::inRandomOrder()->pluck('id')->first(),
        ];
    }
}
