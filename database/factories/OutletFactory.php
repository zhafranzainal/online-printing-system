<?php

namespace Database\Factories;

use App\Models\Campus;
use App\Models\Outlet;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class OutletFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Outlet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'campus_id' => Campus::inRandomOrder()->pluck('id')->first(),
        ];
    }
}
