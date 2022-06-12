<?php

namespace Database\Seeders;

use App\Models\Gem;
use Illuminate\Database\Seeder;

class GemSeeder extends Seeder
{
    public function run(): void
    {
        Gem::factory()->chippedRuby()->create();
        Gem::factory()->flawedRuby()->create();
        Gem::factory()->ruby()->create();
        Gem::factory()->flawlessRuby()->create();
        Gem::factory()->perfectRuby()->create();
        Gem::factory()->chippedSapphire()->create();
        Gem::factory()->flawedSapphire()->create();
        Gem::factory()->sapphire()->create();
        Gem::factory()->flawlessSapphire()->create();
        Gem::factory()->perfectSapphire()->create();
        Gem::factory()->chippedTopaz()->create();
        Gem::factory()->flawedTopaz()->create();
        Gem::factory()->topaz()->create();
        Gem::factory()->flawlessTopaz()->create();
        Gem::factory()->perfectTopaz()->create();
        Gem::factory()->chippedEmerald()->create();
        Gem::factory()->flawedEmerald()->create();
        Gem::factory()->emerald()->create();
        Gem::factory()->flawlessEmerald()->create();
        Gem::factory()->perfectEmerald()->create();
        Gem::factory()->chippedDiamond()->create();
        Gem::factory()->flawedDiamond()->create();
        Gem::factory()->diamond()->create();
        Gem::factory()->flawlessDiamond()->create();
        Gem::factory()->perfectDiamond()->create();
        Gem::factory()->chippedAmethyst()->create();
        Gem::factory()->flawedAmethyst()->create();
        Gem::factory()->amethyst()->create();
        Gem::factory()->flawlessAmethyst()->create();
        Gem::factory()->perfectAmethyst()->create();
        Gem::factory()->chippedSkull()->create();
        Gem::factory()->flawedSkull()->create();
        Gem::factory()->skull()->create();
        Gem::factory()->flawlessSkull()->create();
        Gem::factory()->perfectSkull()->create();
    }
}
