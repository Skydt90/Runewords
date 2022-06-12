<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(RuneRecipeSeeder::class);
        $this->call(GemSeeder::class);
        $this->call(RuneSeeder::class);
        $this->call(RunewordSeeder::class);
        $this->call(RuneRunewordSeeder::class);
    }
}
