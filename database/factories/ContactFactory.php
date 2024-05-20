<?php

namespace Database\Factories;

use App\Models\Quarter;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quarter_id' => Quarter::inRandomOrder()->first()->id,
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'reason'=> $this->faker->name(),
            'message'=> $this->faker->paragraph()
        ];
    }
}