<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'birthday' => $this->faker->date(),
            'telegram' => $this->faker->userName,
            'whatsUp' => $this->faker->userName,
            'instagram' => $this->faker->userName,
            'job' => $this->faker->jobTitle,
            'about' => $this->faker->sentence,
            'location' => $this->faker->city,
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
