<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\City;
use App\Models\State;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'unit_no' => $this->faker->buildingNumber(),
            'street_name' => $this->faker->streetName(),
            'residential_area' => $this->faker->township(),
            'postal_code' => $this->faker->postcode(),
            'city_id' => City::inRandomOrder()->pluck('id')->first(),
            'state_id' => State::inRandomOrder()->pluck('id')->first(),
        ];
    }
}
