<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   
        $sql = file_get_contents(public_path('db/districts.sql'));
        $queries = explode(';', $sql);
        foreach ($queries as $query) {
            if (!empty(trim($query))) {
                DB::statement($query);
            }
        }
    }
}