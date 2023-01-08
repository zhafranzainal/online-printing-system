<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique->email,
            'email_verified_at' => now(),
            'username' => $this->faker->word(),
            'password' => Hash::make('password'),
            'mobile_no' => $this->faker->mobileNumber(true, false),
            'is_rider' => $this->faker->boolean,
            'remember_token' => Str::random(10),
            'address_id' => Address::inRandomOrder()->pluck('id')->first(),
            'role_id' => Role::inRandomOrder()->pluck('id')->first(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
