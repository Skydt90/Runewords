<?php

namespace Database\Seeders;

use App\Models\Runeword;
use Illuminate\Database\Seeder;

class RuneRunewordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $runewords = Runeword::all()->each(function ($runeword) {

            $runeIds = $this->mapping[$runeword->name];

            $runeword->runes()->sync($runeIds);
        });
    }

    private $mapping = [
        'Breath of the Dying' => [1,2,5,15,26,33],
        'Pride' => [32,16,28,29],
        'Hand of Justice' => [11,32,28,29],
        'Eternity' => [11,30,24,12,29],
        'Doom' => [32,15,28,27,22],
        'Last Wish' => [30,31,23,29],
        'Destruction' => [30,31,18,28,26],
        'Enigma' => [30,6,31],
        'Phoenix' => [31,28,26],
        'Brand' => [25,31,28,23],
        'Faith' => [2,31,20,27],
        'Famine' => [19,31,27,9],
        'Fury' => [5,25,31],
        'Dream' => [16,31,21],
        'Ice' => [11,31,28,13],
        'Infinity' => [30,24,23],
        'Chains of Honor' => [30,14,24,22],
        'Beast' => [30,17,23,3,22],
        'Wrath' => [30,17,23,21],
        'Dragon' => [28,12,29],
        'Bramble' => [5,27,8,29],
        'Wind' => [1,29],
        'Grief' => [5,28,23,8,3],
        'Fortitude' => [14,1,28,12],
        'Exile' => [14,24,27,26],
        'Call to Arms' => [11,24,23,27,8],
        'Chaos' => [19,27,22],
        'Death' => [1,25,15,9,26],
        'Silence' => [14,2,15,24,3,26],
        'Heart of the Oak' => [18,21,10,26],
        'Kingslayer' => [19,25,23,22],
        'Rift' => [25,15,18,20],
        'Principle' => [2,25,8],
        'Delirium' => [16,24,20],
        'Oath' => [17,23,21,13],
        'Sanctuary' => [18,23],
        'Venom' => [14,23,7],
        'Rain' => [6,23,9],
        'Prudence' => [23,3],
        'Bone' => [12,22],
        'Gloom' => [19,21,22],
        'Stone' => [17,21,13,22],
        'Duress' => [13,10,22],
        'Crescent Moon' => [13,3,22],
        'Enlightenment' => [21,8,12],
        'Lawbringer' => [11,18,20],
        'Wealth' => [18,20,3],
        'Voice of Reason' => [1,2,18,20],
        'Passion' => [14,2,20,9],
        'Treachery' => [20,13,10],
        'Obedience' => [5,19,15,18,10],
        'Lionheart' => [19,15,17],
        'Melody' => [18,4,13],
        'Harmony' => [6,18,12,3],
        'Memory' => [5,16,17,12],
        'Splendor' => [5,17],
        'Smoke' => [17,4],
        'White' => [14,16],
        'Black' => [16,4,10],
        'Myth' => [11,15,4],
        'Peace' => [11,13,10],
        'Rhyme' => [5,13],
        'Honor' => [11,1,6,12,3],
        'Lore' => [9,12],
        'Insight' => [8,12,7,3],
        'Radiance' => [6,4,12],
        'Spirit' => [11,9,7,10],
        'Kings Grace' => [11,8,10],
        'Edge' => [11,7,3],
        'Strength' => [11,3],
        'Holy Thunder' => [5,9,8,7],
        'Ancients Pledge' => [9,8,7],
        'Zephyr' => [5,9],
        'Leaf' => [8,3],
        'Stealth' => [5,7],
        'Malice' => [1,5,6],
        'Nadir' => [4,3],
        'Steel' => [1,3],
    ];
}
