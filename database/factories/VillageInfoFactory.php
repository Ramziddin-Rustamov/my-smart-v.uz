<?php

namespace Database\Factories;

use App\Models\Quarter;
use App\Models\VillageInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class VillageInfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VillageInfo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quarter_id' => Quarter::pluck('id')->random(),
            'what_reasons' => $this->faker->sentence,
            'working_hours' => $this->faker->sentence,
            'additional_information' => $this->faker->paragraph,
            'main_email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'map_location' => $this->faker->address,
            'population' => $this->faker->numberBetween(1000, 100000),
            'youth' => $this->faker->numberBetween(50, 5000),
            'retailers' => $this->faker->numberBetween(5, 100),
            'schools' => $this->faker->numberBetween(1, 20),
            'kindergartens' => $this->faker->numberBetween(1, 10),
            'mosques' => $this->faker->numberBetween(1, 5),
            'shops' => $this->faker->numberBetween(10, 100),
            'hospital' => $this->faker->numberBetween(1, 10),
            'other_services' => $this->faker->numberBetween(1, 20),
            'video1' => $this->faker->url,
            'video1_image_cover' => $this->faker->imageUrl(),
            'video2' => $this->faker->url,
            'video2_image_cover' => $this->faker->imageUrl(),
        ];
    }
}
