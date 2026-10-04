<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'customer_id' => Customer::inRandomOrder()->value('id'),
            'created_by' => User::inRandomOrder()->value('id'),
            'invoice_number' => fake()->unique()->bothify('INV-#####'),
            'order_date' => fake()->dateTimeBetween('-6 months', 'now'),
            'delivery_address' => fake()->address(),
            'notes' => fake()->optional()->sentence(),
            'status' => fake()->randomElement([
                'Ordered',
                'In process',
                'In route',
                'Delivered',
            ]),
        ];
    }
}