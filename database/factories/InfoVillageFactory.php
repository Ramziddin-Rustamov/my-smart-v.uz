<?php

namespace Database\Factories;

use App\Models\Quarter;
use Illuminate\Database\Eloquent\Factories\Factory;

class InfoVillageFactory extends Factory
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
            'number' => $this->faker->numberBetween(1, 100),
            'image'=> 'image/',
            'title'=> 'title',
            'territory' => $this->faker->city,
            'workers_count' => $this->faker->numberBetween(1, 50),
            'rooms' => $this->faker->numberBetween(1, 20),
            'condition' => $this->faker->word,
            'about' => $this->faker->text(340),
            'customers' => $this->faker->numberBetween(1, 1000),
        ];
    }
}
