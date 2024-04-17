<?php

namespace Database\Factories;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'shop_id' => Shop::factory(),
            'name' => $this->faker->name,
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'body' => $this->faker->paragraph,
            'quantity' => $this->faker->randomFloat(2, 0, 100),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
