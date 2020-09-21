<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
        \App\Models\Model\Product::factory()->count(30)->create();
        \App\Models\Model\Review::factory()->count(300)->create();
    }
}
