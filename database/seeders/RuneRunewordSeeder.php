<?php

namespace Database\Seeders;

use App\Models\Rune;
use App\Models\Runeword;
use Illuminate\Database\Seeder;

class RuneRunewordSeeder extends Seeder
{
    public function run(): void
    {
        Runeword::all()->each(function ($runeword) {

            # Fetch the names in correct order
            $runeOrderNames = explode('-', $runeword->combination);

            # Grab the runes related to the runeword
            $runes = Rune::whereIn('name', $runeOrderNames)->get();

            $runeIdsInOrder = [];

            # Fetch the ids for each rune in the correct order
            foreach ($runeOrderNames as $index => $name) {

                $priority = $index + 1;
                $id = $runes->where('name', $name)->first()->id;

                $runeIdsInOrder[$id] = ['priority' => $priority];
            }

            $runeword->runes()->sync($runeIdsInOrder);
        });
    }
}
