<?php

namespace Database\Factories;


use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    protected $model = Shop::class;


    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'address' => $this->faker->address,
            'opened_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'user_id' => \App\Models\User::factory()->create()->id,
            'image' => $this->faker->imageUrl(),
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
