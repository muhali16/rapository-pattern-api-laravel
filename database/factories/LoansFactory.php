<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loans>
 */
class LoansFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'loan_dt' => $this->faker->dateTime,
            'return_dt' => $this->faker->dateTime,
            'user_id' => $this->faker->numberBetween(1, 10),
            'book_id' => $this->faker->numberBetween(1, 50),
        ];
    }
}
