<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnnouncementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, 10),
            'name' => $this->faker->sentence(4),
            'description' => $this->faker->paragraph(3),
            'photo' => 'image/announcement/announcement.webp', // Default image path
            'is_active' => $this->faker->boolean(80), // 80% chance of being active
        ];
    }
}
