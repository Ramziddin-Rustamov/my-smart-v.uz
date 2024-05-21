<?php

namespace Database\Seeders;

use App\Models\InfoVillage;
use Illuminate\Database\Seeder;

class InfoVillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InfoVillage::factory()->count(3)->create();
    }
}
