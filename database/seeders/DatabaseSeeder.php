<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CommentSeeder;
use Database\Seeders\SlideImageSeeder;
use Database\Seeders\TechnologySeeder;
use Database\Seeders\ShopOwnerSeeder;
use Database\Seeders\ShopSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // UserSeeder::class,
            // CommentSeeder::class,
            // PostSeeder::class,
            // TechnologySeeder::class,
            // PortfolioSeeder::class,
            // SlideImageSeeder::class,
            // ClientViewSeeder::class,
            // ContactSeeder::class,
            ProductSeeder::class,
            ShopSeeder::class,
            ShopOwnerSeeder::class,
        ]);
    }
}
