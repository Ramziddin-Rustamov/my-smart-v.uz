<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VillageInfo;

class VillageInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VillageInfo::factory()->count(1)->create();
    }
}
