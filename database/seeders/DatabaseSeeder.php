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
        $this->call(RuneRecipeSeeder::class);
        $this->call(RuneSeeder::class);
        $this->call(RunewordSeeder::class);
        $this->call(RuneRunewordSeeder::class);
    }
}
