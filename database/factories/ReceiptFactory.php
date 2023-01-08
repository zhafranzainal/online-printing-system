<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Order;
use App\Models\PaymentMethod;
use App\Models\Receipt;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReceiptFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Receipt::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->pluck('id')->first(),
            'address_id' => Address::inRandomOrder()->pluck('id')->first(),
            'payment_method_id' => PaymentMethod::inRandomOrder()->pluck('id')->first(),
            'order_id' => Order::inRandomOrder()->pluck('id')->first(),
            'status' => 'successful',
        ];
    }
}
