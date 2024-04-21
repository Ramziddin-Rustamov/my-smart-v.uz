<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShopOwner;
class ShopOwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShopOwner::factory(10)->create();
    }
}
