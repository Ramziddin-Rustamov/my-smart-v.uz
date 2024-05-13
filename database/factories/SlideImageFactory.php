<?php

namespace Database\Factories;

use App\Models\Quarter;
use Illuminate\Database\Eloquent\Factories\Factory;

class SlideImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quarter_id' => Quarter::pluck('id')->random(),
            'title' => $this->faker->name(1),
            'body' => $this->faker->name(2),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
