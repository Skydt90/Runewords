<?php

namespace Database\Factories;

use App\Models\Gem;
use Illuminate\Database\Eloquent\Factories\Factory;

class GemFactory extends Factory
{
    protected $model = Gem::class;

    public function definition(): array
    {
        return [
            //
        ];
    }

    public function chippedRuby(): self
    {
        return $this->state([
            'name' => 'Chipped Ruby',
            'rune_recipe_id' => 13,
            'image' => '/storage/gems/chipped-ruby.png'
        ]);
    }

    public function flawedRuby(): self
    {
        return $this->state([
            'name' => 'Flawed Ruby',
            'rune_recipe_id' => 19,
            'image' => '/storage/gems/flawed-ruby.png'
        ]);
    }

    public function ruby(): self
    {
        return $this->state([
            'name' => 'Ruby',
            'rune_recipe_id' => 25,
            'image' => '/storage/gems/ruby.png'
        ]);
    }

    public function flawlessRuby(): self
    {
        return $this->state([
            'name' => 'Flawless Ruby',
            'rune_recipe_id' => 31,
            'image' => '/storage/gems/flawless-ruby.png'
        ]);
    }

    public function perfectRuby(): self
    {
        return $this->state([
            'name' => 'Perfect Ruby',
            'rune_recipe_id' => null,
            'image' => '/storage/gems/perfect-ruby.png'
        ]);
    }

    public function chippedSapphire(): self
    {
        return $this->state([
            'name' => 'Chipped Sapphire',
            'rune_recipe_id' => 12,
            'image' => '/storage/gems/chipped-sapphire.png'
        ]);
    }

    public function flawedSapphire(): self
    {
        return $this->state([
            'name' => 'Flawed Sapphire',
            'rune_recipe_id' => 18,
            'image' => '/storage/gems/flawed-sapphire.png'
        ]);
    }

    public function sapphire(): self
    {
        return $this->state([
            'name' => 'Sapphire',
            'rune_recipe_id' => 24,
            'image' => '/storage/gems/sapphire.png'
        ]);
    }

    public function flawlessSapphire(): self
    {
        return $this->state([
            'name' => 'Flawless Sapphire',
            'rune_recipe_id' => 30,
            'image' => '/storage/gems/flawless-sapphire.png'
        ]);
    }

    public function perfectSapphire(): self
    {
        return $this->state([
            'name' => 'Perfect Sapphire',
            'rune_recipe_id' => null,
            'image' => '/storage/gems/perfect-sapphire.png'
        ]);
    }

    public function chippedTopaz(): self
    {
        return $this->state([
            'name' => 'Chipped Topaz',
            'rune_recipe_id' => 10,
            'image' => '/storage/gems/chipped-topaz.png'
        ]);
    }

    public function flawedTopaz(): self
    {
        return $this->state([
            'name' => 'Flawed Topaz',
            'rune_recipe_id' => 16,
            'image' => '/storage/gems/flawed-topaz.png'
        ]);
    }

    public function topaz(): self
    {
        return $this->state([
            'name' => 'Topaz',
            'rune_recipe_id' => 22,
            'image' => '/storage/gems/topaz.png'
        ]);
    }

    public function flawlessTopaz(): self
    {
        return $this->state([
            'name' => 'Flawless Topaz',
            'rune_recipe_id' => 28,
            'image' => '/storage/gems/flawless-topaz.png'
        ]);
    }

    public function perfectTopaz(): self
    {
        return $this->state([
            'name' => 'Perfect Topaz',
            'rune_recipe_id' => null,
            'image' => '/storage/gems/perfect-topaz.png'
        ]);
    }

    public function chippedEmerald(): self
    {
        return $this->state([
            'name' => 'Chipped Emerald',
            'rune_recipe_id' => 14,
            'image' => '/storage/gems/chipped-emerald.png'
        ]);
    }

    public function flawedEmerald(): self
    {
        return $this->state([
            'name' => 'Flawed Emerald',
            'rune_recipe_id' => 20,
            'image' => '/storage/gems/flawed-emerald.png'
        ]);
    }

    public function emerald(): self
    {
        return $this->state([
            'name' => 'Emerald',
            'rune_recipe_id' => 26,
            'image' => '/storage/gems/emerald.png'
        ]);
    }

    public function flawlessEmerald(): self
    {
        return $this->state([
            'name' => 'Flawless Emerald',
            'rune_recipe_id' => 32,
            'image' => '/storage/gems/flawless-emerald.png'
        ]);
    }

    public function perfectEmerald(): self
    {
        return $this->state([
            'name' => 'Perfect Emerald',
            'rune_recipe_id' => null,
            'image' => '/storage/gems/perfect-emerald.png'
        ]);
    }

    public function chippedDiamond(): self
    {
        return $this->state([
            'name' => 'Chipped Diamond',
            'rune_recipe_id' => 15,
            'image' => '/storage/gems/chipped-diamond.png'
        ]);
    }

    public function flawedDiamond(): self
    {
        return $this->state([
            'name' => 'Flawed Diamond',
            'rune_recipe_id' => 21,
            'image' => '/storage/gems/flawed-diamond.png'
        ]);
    }

    public function diamond(): self
    {
        return $this->state([
            'name' => 'Diamond',
            'rune_recipe_id' => 27,
            'image' => '/storage/gems/diamond.png'
        ]);
    }

    public function flawlessDiamond(): self
    {
        return $this->state([
            'name' => 'Flawless Diamond',
            'rune_recipe_id' => null,
            'image' => '/storage/gems/flawless-diamond.png'
        ]);
    }

    public function perfectDiamond(): self
    {
        return $this->state([
            'name' => 'Perfect Diamond',
            'rune_recipe_id' => null,
            'image' => '/storage/gems/perfect-diamond.png'
        ]);
    }

    public function chippedAmethyst(): self
    {
        return $this->state([
            'name' => 'Chipped Amethyst',
            'rune_recipe_id' => 11,
            'image' => '/storage/gems/chipped-amethyst.png'
        ]);
    }

    public function flawedAmethyst(): self
    {
        return $this->state([
            'name' => 'Flawed Amethyst',
            'rune_recipe_id' => 17,
            'image' => '/storage/gems/flawed-amethyst.png'
        ]);
    }

    public function amethyst(): self
    {
        return $this->state([
            'name' => 'Amethyst',
            'rune_recipe_id' => 23,
            'image' => '/storage/gems/amethyst.png'
        ]);
    }

    public function flawlessAmethyst(): self
    {
        return $this->state([
            'name' => 'Flawless Amethyst',
            'rune_recipe_id' => 29,
            'image' => '/storage/gems/flawless-amethyst.png'
        ]);
    }

    public function perfectAmethyst(): self
    {
        return $this->state([
            'name' => 'Perfect Amethyst',
            'rune_recipe_id' => null,
            'image' => '/storage/gems/perfect-amethyst.png'
        ]);
    }

    public function chippedSkull(): self
    {
        return $this->state([
            'name' => 'Chipped Skull',
            'rune_recipe_id' => null,
            'image' => '/storage/gems/chipped-skull.png'
        ]);
    }

    public function flawedSkull(): self
    {
        return $this->state([
            'name' => 'Flawed Skull',
            'rune_recipe_id' => null,
            'image' => '/storage/gems/flawed-skull.png'
        ]);
    }

    public function skull(): self
    {
        return $this->state([
            'name' => 'Skull',
            'rune_recipe_id' => null,
            'image' => '/storage/gems/skull.png'
        ]);
    }

    public function flawlessSkull(): self
    {
        return $this->state([
            'name' => 'Flawless Skull',
            'rune_recipe_id' => null,
            'image' => '/storage/gems/flawless-skull.png'
        ]);
    }

    public function perfectSkull(): self
    {
        return $this->state([
            'name' => 'Perfect Skull',
            'rune_recipe_id' => null,
            'image' => '/storage/gems/perfect-skull.png'
        ]);
    }
}
