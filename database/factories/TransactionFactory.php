<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Account;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            "received_from" => fake()->name(),
            "sum_of_pesos" => fake()->randomFloat(2, -1000, 1000),
            "as_payment_for" => fake()->realText(),
            "occurred_on" => fake()->date(),
            "account_id" => Account::inRandomOrder()->first()
        ];
    }
}
