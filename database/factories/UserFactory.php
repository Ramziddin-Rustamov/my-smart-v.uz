<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'father_name' => $this->faker->firstName . ' ' . $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'provider_id' => null,
            'image' => "image/user-128.png",
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // default password 'password'
            'is_admin' => $this->faker->randomElement([false]),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
