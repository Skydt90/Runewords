<?php

namespace Database\Factories;

use App\Models\Rune;
use Illuminate\Database\Eloquent\Factories\Factory;

class RuneFactory extends Factory
{
    protected $model = Rune::class;

    public function definition(): array
    {
        return [
            //
        ];
    }

    public function el(): self
    {
        return $this->state([
            'name' => 'El',
            'attributes' => 'Weapon: +50 to Attack Rating, +1 to Light Radius | Armor/Helm/Shield: +1 to Light Radius, +15 to Defence',
            'level' => 11,
            'rune_recipe_id' => null,
            'image' => '/storage/runes/el.png'
        ]);
    }

    public function eld(): self
    {
        return $this->state([
            'name' => 'Eld',
            'attributes' => 'Weapon: +75% Damage vs. Undead, +50 Attack Rating vs. Undead | Armor/Helm: Lowers Stamina drain by 15% | Shield: +7% Blocking',
            'level' => 11,
            'rune_recipe_id' => 1,
            'image' => '/storage/runes/eld.png'
        ]);
    }

    public function tir(): self
    {
        return $this->state([
            'name' => 'Tir',
            'attributes' => 'Weapon: +2 Mana Per Kill | Armor/Helm/Shield: +2 Mana Per Kill',
            'level' => 13,
            'rune_recipe_id' => 2,
            'image' => '/storage/runes/tir.png'
        ]);
    }

    public function nef(): self
    {
        return $this->state([
            'name' => 'Nef',
            'attributes' => 'Weapon: Knockback | Armor/Helm/Shield: +30 Defense vs. Missile',
            'level' => 13,
            'rune_recipe_id' => 3,
            'image' => '/storage/runes/nef.png'
        ]);
    }

    public function eth(): self
    {
        return $this->state([
            'name' => 'Eth',
            'attributes' => 'Weapon: -25% to Target Defense | Armor/Helm/Shield: Regenerate Mana 15%',
            'level' => 15,
            'rune_recipe_id' => 4,
            'image' => '/storage/runes/eth.png'
        ]);
    }

    public function ith(): self
    {
        return $this->state([
            'name' => 'Ith',
            'attributes' => 'Weapon: +9 to Maximum Damage | Armor/Helm/Shield: 15% Damage Taken Goes to Mana',
            'level' => 15,
            'rune_recipe_id' => 5,
            'image' => '/storage/runes/ith.png'
        ]);
    }

    public function tal(): self
    {
        return $this->state([
            'name' => 'Tal',
            'attributes' => 'Weapon: 75 Poison damage over 5 seconds | Armor/Helm: +30% Poison Resistance | Shield: +35% Poison Resistance',
            'level' => 17,
            'rune_recipe_id' => 6,
            'image' => '/storage/runes/tal.png'
        ]);
    }

    public function ral(): self
    {
        return $this->state([
            'name' => 'Ral',
            'attributes' => 'Weapon: +5-30 Fire Damage | Armor/Helm: +30% Fire Resistance | Shield: +35% Fire Resistance',
            'level' => 19,
            'rune_recipe_id' => 7,
            'image' => '/storage/runes/ral.png'
        ]);
    }

    public function ort(): self
    {
        return $this->state([
            'name' => 'Ort',
            'attributes' => 'Weapon: +1-50 Lightning Damage | Armor/Helm: +30% Lightning Resistance | Shield: +35% Lightning Resistance',
            'level' => 21,
            'rune_recipe_id' => 8,
            'image' => '/storage/runes/ort.png'
        ]);
    }

    public function thul(): self
    {
        return $this->state([
            'name' => 'Thul',
            'attributes' => 'Weapon: +3-14 Cold Damage (Cold Length 3 seconds) | Armor/Helm: +30% Cold Resistance | Shield: +35% Cold Resistance',
            'level' => 23,
            'rune_recipe_id' => 9,
            'image' => '/storage/runes/thul.png'
        ]);
    }

    public function amn(): self
    {
        return $this->state([
            'name' => 'Amn',
            'attributes' => 'Weapon: 7% Life Stolen Per Hit | Armor/Helm/Shield: Attacker takes 14 damage',
            'level' => 25,
            'rune_recipe_id' => 10,
            'image' => '/storage/runes/amn.png'
        ]);
    }

    public function sol(): self
    {
        return $this->state([
            'name' => 'Sol',
            'attributes' => 'Weapon: +9 to Minimum Damage | Armor/Helm/Shield: -7 Damage Taken',
            'level' => 27,
            'rune_recipe_id' => 11,
            'image' => '/storage/runes/sol.png'
        ]);
    }

    public function shael(): self
    {
        return $this->state([
            'name' => 'Shael',
            'attributes' => 'Weapon: Faster Attack Rate (+20) | Armor/Helm: Faster Hit Recovery (+20) | Shields: Faster Block Rate (+20)',
            'level' => 29,
            'rune_recipe_id' => 12,
            'image' => '/storage/runes/shael.png'
        ]);
    }

    public function dol(): self
    {
        return $this->state([
            'name' => 'Dol',
            'attributes' => 'Weapon: 25% Chance that Hit Causes Monster to Flee | Armor/Helm/Shield: +7 Replenish Life',
            'level' => 31,
            'rune_recipe_id' => 13,
            'image' => '/storage/runes/dol.png'
        ]);
    }

    public function hel(): self
    {
        return $this->state([
            'name' => 'Hel',
            'attributes' => 'Weapon: -20% Requirements | Armor/Helm/Shield: -15% Requirements',
            'level' => 33,
            'rune_recipe_id' => 14,
            'image' => '/storage/runes/hel.png'
        ]);
    }

    public function io(): self
    {
        return $this->state([
            'name' => 'Io',
            'attributes' => 'Weapon: +10 Vitality | Armor/Helm/Shield: +10 Vitality',
            'level' => 35,
            'rune_recipe_id' => 15,
            'image' => '/storage/runes/io.png'
        ]);
    }

    public function lum(): self
    {
        return $this->state([
            'name' => 'Lum',
            'attributes' => 'Weapon: +10 Energy | Armor/Helm/Shield: +10 Energy',
            'level' => 37,
            'rune_recipe_id' => 16,
            'image' => '/storage/runes/lum.png'
        ]);
    }

    public function ko(): self
    {
        return $this->state([
            'name' => 'Ko',
            'attributes' => 'Weapon: +10 Dexterity | Armor/Helm/Shield: +10 Dexterity',
            'level' => 39,
            'rune_recipe_id' => 17,
            'image' => '/storage/runes/ko.png'
        ]);
    }

    public function fal(): self
    {
        return $this->state([
            'name' => 'Fal',
            'attributes' => 'Weapon: +10 Strength | Armor/Helm/Shield: +10 Strength',
            'level' => 41,
            'rune_recipe_id' => 18,
            'image' => '/storage/runes/fal.png'
        ]);
    }

    public function lem(): self
    {
        return $this->state([
            'name' => 'Lem',
            'attributes' => 'Weapon: +75% Extra Gold from Monsters | Armor/Helm/Shield: +50% Extra Gold from Monsters',
            'level' => 43,
            'rune_recipe_id' => 19,
            'image' => '/storage/runes/lem.png'
        ]);
    }

    public function pul(): self
    {
        return $this->state([
            'name' => 'Pul',
            'attributes' => 'Weapon: +75% Damage to Demons, +100 Attack Rating against Demons | Armor/Helm/Shield:+30% Defense',
            'level' => 45,
            'rune_recipe_id' => 20,
            'image' => '/storage/runes/pul.png'
        ]);
    }

    public function um(): self
    {
        return $this->state([
            'name' => 'Um',
            'attributes' => 'Weapon: 25% Chance of Open Wounds | Armor/Helm: +15% Resist All | Shields: +22% Resist All',
            'level' => 47,
            'rune_recipe_id' => 21,
            'image' => '/storage/runes/um.png'
        ]);
    }

    public function mal(): self
    {
        return $this->state([
            'name' => 'Mal',
            'attributes' => 'Weapon: Prevent Monster Healing | Armor/Helm/Shield: Reduce Magic Damage by 7',
            'level' => 49,
            'rune_recipe_id' => 22,
            'image' => '/storage/runes/mal.png'
        ]);
    }

    public function ist(): self
    {
        return $this->state([
            'name' => 'Ist',
            'attributes' => 'Weapon: +30% Better Chance of Finding Magical Items | Armor/Helm/Shield: +25% Better Chance of Finding Magical Items',
            'level' => 51,
            'rune_recipe_id' => 23,
            'image' => '/storage/runes/ist.png'
        ]);
    }

    public function gul(): self
    {
        return $this->state([
            'name' => 'Gul',
            'attributes' => 'Weapon: +20% Attack Rating | Armor/Helm/Shield: +5 to Max Resist Poison',
            'level' => 53,
            'rune_recipe_id' => 24,
            'image' => '/storage/runes/gul.png'
        ]);
    }

    public function vex(): self
    {
        return $this->state([
            'name' => 'Vex',
            'attributes' => 'Weapon: 7% Mana Leech | Armor/Helm/Shield: +5 to Max Fire Resist',
            'level' => 55,
            'rune_recipe_id' => 25,
            'image' => '/storage/runes/vex.png'
        ]);
    }

    public function ohm(): self
    {
        return $this->state([
            'name' => 'Ohm',
            'attributes' => 'Weapon: +50% Damage | Armor/Helm/Shield: +5 to Max. Resist Cold',
            'level' => 57,
            'rune_recipe_id' => 26,
            'image' => '/storage/runes/ohm.png'
        ]);
    }

    public function lo(): self
    {
        return $this->state([
            'name' => 'Lo',
            'attributes' => 'Weapon: 20% Chance of Deadly Strike | Armor/Helm/Shield: +5 to Max. Resist Lightning',
            'level' => 59,
            'rune_recipe_id' => 27,
            'image' => '/storage/runes/lo.png'
        ]);
    }

    public function sur(): self
    {
        return $this->state([
            'name' => 'Sur',
            'attributes' => 'Weapon: 20% Chance of Hit Blinds Target | Armor/Helm: +5% total Mana | Shields: +50 Mana',
            'level' => 61,
            'rune_recipe_id' => 28,
            'image' => '/storage/runes/sur.png'
        ]);
    }

    public function ber(): self
    {
        return $this->state([
            'name' => 'Ber',
            'attributes' => 'Weapon: 20% Chance of Crushing Blow | Armor/Helm/Shield: Damage Reduced by 8%',
            'level' => 63,
            'rune_recipe_id' => 29,
            'image' => '/storage/runes/ber.png'
        ]);
    }

    public function jah(): self
    {
        return $this->state([
            'name' => 'Jah',
            'attributes' => 'Weapon: Ignores Target Defense | Armor/Helm: +5% of total Hit Points | Shields: +50 Hit Points',
            'level' => 65,
            'rune_recipe_id' => 30,
            'image' => '/storage/runes/jah.png'
        ]);
    }

    public function cham(): self
    {
        return $this->state([
            'name' => 'Cham',
            'attributes' => 'Weapon: 32% Chance of Hit Freezing Target for 3 seconds | Armor/Helm/Shield: Cannot be Frozen',
            'level' => 67,
            'rune_recipe_id' => 31,
            'image' => '/storage/runes/cham.png'
        ]);
    }

    public function zod(): self
    {
        return $this->state([
            'name' => 'Zod',
            'attributes' => 'Weapon: Indestructible | Armor/Helm/Shield: Indestructible',
            'level' => 69,
            'rune_recipe_id' => 32,
            'image' => '/storage/runes/zod.png'
        ]);
    }
}
