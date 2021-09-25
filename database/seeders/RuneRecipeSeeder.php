<?php

namespace Database\Seeders;

use App\Models\RuneRecipe;
use Illuminate\Database\Seeder;

class RuneRecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RuneRecipe::factory()->eld()->create();
        RuneRecipe::factory()->tir()->create();
        RuneRecipe::factory()->nef()->create();
        RuneRecipe::factory()->eth()->create();
        RuneRecipe::factory()->ith()->create();
        RuneRecipe::factory()->tal()->create();
        RuneRecipe::factory()->ral()->create();
        RuneRecipe::factory()->ort()->create();
        RuneRecipe::factory()->thul()->create();
        RuneRecipe::factory()->amn()->create();
        RuneRecipe::factory()->sol()->create();
        RuneRecipe::factory()->shael()->create();
        RuneRecipe::factory()->dol()->create();
        RuneRecipe::factory()->hel()->create();
        RuneRecipe::factory()->io()->create();
        RuneRecipe::factory()->lum()->create();
        RuneRecipe::factory()->ko()->create();
        RuneRecipe::factory()->fal()->create();
        RuneRecipe::factory()->lem()->create();
        RuneRecipe::factory()->pul()->create();
        RuneRecipe::factory()->um()->create();
        RuneRecipe::factory()->mal()->create();
        RuneRecipe::factory()->ist()->create();
        RuneRecipe::factory()->gul()->create();
        RuneRecipe::factory()->vex()->create();
        RuneRecipe::factory()->ohm()->create();
        RuneRecipe::factory()->lo()->create();
        RuneRecipe::factory()->sur()->create();
        RuneRecipe::factory()->ber()->create();
        RuneRecipe::factory()->jah()->create();
        RuneRecipe::factory()->cham()->create();
        RuneRecipe::factory()->zod()->create();
    }
}
