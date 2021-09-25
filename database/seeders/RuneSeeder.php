<?php

namespace Database\Seeders;

use App\Models\Rune;
use Illuminate\Database\Seeder;

class RuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rune::factory()->el()->create();
        Rune::factory()->eld()->create();
        Rune::factory()->tir()->create();
        Rune::factory()->nef()->create();
        Rune::factory()->eth()->create();
        Rune::factory()->ith()->create();
        Rune::factory()->tal()->create();
        Rune::factory()->ral()->create();
        Rune::factory()->ort()->create();
        Rune::factory()->thul()->create();
        Rune::factory()->amn()->create();
        Rune::factory()->sol()->create();
        Rune::factory()->shael()->create();
        Rune::factory()->dol()->create();
        Rune::factory()->hel()->create();
        Rune::factory()->io()->create();
        Rune::factory()->lum()->create();
        Rune::factory()->ko()->create();
        Rune::factory()->fal()->create();
        Rune::factory()->lem()->create();
        Rune::factory()->pul()->create();
        Rune::factory()->um()->create();
        Rune::factory()->mal()->create();
        Rune::factory()->ist()->create();
        Rune::factory()->gul()->create();
        Rune::factory()->vex()->create();
        Rune::factory()->ohm()->create();
        Rune::factory()->lo()->create();
        Rune::factory()->sur()->create();
        Rune::factory()->ber()->create();
        Rune::factory()->jah()->create();
        Rune::factory()->cham()->create();
        Rune::factory()->zod()->create();
    }
}
