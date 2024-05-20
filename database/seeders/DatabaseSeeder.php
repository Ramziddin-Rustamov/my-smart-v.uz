<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CommentSeeder;
use Database\Seeders\SlideImageSeeder;
use Database\Seeders\ShopOwnerSeeder;
use Database\Seeders\AnnouncementSeeder;
use Database\Seeders\ShopSeeder;
use Database\Seeders\VillageInfoSeeder;

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
            // RegionSeeder::class,
            // DistrictSeeder::class,
            // QuarterSeeder::class,
            UserSeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
            SlideImageSeeder::class,
            ClientViewSeeder::class,
            ContactSeeder::class,
            ProductSeeder::class,
            ShopSeeder::class,
            ShopOwnerSeeder::class,
            AnnouncementSeeder::class,
            TeamMemberSeeder::class,
            VillageInfoSeeder::class,
            AdminSeeder::class
        ]);
    }
}
