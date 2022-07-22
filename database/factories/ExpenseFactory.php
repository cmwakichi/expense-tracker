<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=> User::factory(),
            'category_id'=> category::factory(),
            'name' => $this->faker->text,
            'expense_date'=> $this->faker->date('Y-m-d'),
            'amount'=> $this->faker->randomFloat(),
            'description'=> $this->faker->text

        ];
    }
}
