<?php

namespace Database\Factories;

use App\Models\RuneRecipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class RuneRecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RuneRecipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            //
        ];
    }

    public function eld(): self
    {
        return $this->state([
            'name' => 'Eld',
            'rune_count' => '3',
            'image' => '/storage/runes/eld.png'
        ]);
    }

    public function tir(): self
    {
        return $this->state([
            'name' => 'Tir',
            'rune_count' => '3',
            'image' => '/storage/runes/tir.png'
        ]);
    }

    public function nef(): self
    {
        return $this->state([
            'name' => 'Nef',
            'rune_count' => '3',
            'image' => '/storage/runes/nef.png'
        ]);
    }

    public function eth(): self
    {
        return $this->state([
            'name' => 'Eth',
            'rune_count' => '3',
            'image' => '/storage/runes/eth.png'
        ]);
    }

    public function ith(): self
    {
        return $this->state([
            'name' => 'Ith',
            'rune_count' => '3',
            'image' => '/storage/runes/ith.png'
        ]);
    }

    public function tal(): self
    {
        return $this->state([
            'name' => 'Tal',
            'rune_count' => '3',
            'image' => '/storage/runes/tal.png'
        ]);
    }

    public function ral(): self
    {
        return $this->state([
            'name' => 'Ral',
            'rune_count' => '3',
            'image' => '/storage/runes/ral.png'
        ]);
    }

    public function ort(): self
    {
        return $this->state([
            'name' => 'Ort',
            'rune_count' => '3',
            'image' => '/storage/runes/ort.png'
        ]);
    }

    public function thul(): self
    {
        return $this->state([
            'name' => 'Thul',
            'rune_count' => '3',
            'image' => '/storage/runes/thul.png'
        ]);
    }

    public function amn(): self
    {
        return $this->state([
            'name' => 'Amn',
            'rune_count' => '3',
            'image' => '/storage/runes/amn.png'
        ]);
    }

    public function sol(): self
    {
        return $this->state([
            'name' => 'Sol',
            'rune_count' => '3',
            'image' => '/storage/runes/sol.png'
        ]);
    }

    public function shael(): self
    {
        return $this->state([
            'name' => 'Shael',
            'rune_count' => '3',
            'image' => '/storage/runes/shael.png'
        ]);
    }

    public function dol(): self
    {
        return $this->state([
            'name' => 'Dol',
            'rune_count' => '3',
            'image' => '/storage/runes/dol.png'
        ]);
    }

    public function hel(): self
    {
        return $this->state([
            'name' => 'Hel',
            'rune_count' => '3',
            'image' => '/storage/runes/hel.png'
        ]);
    }

    public function io(): self
    {
        return $this->state([
            'name' => 'Io',
            'rune_count' => '3',
            'image' => '/storage/runes/io.png'
        ]);
    }

    public function lum(): self
    {
        return $this->state([
            'name' => 'Lum',
            'rune_count' => '3',
            'image' => '/storage/runes/lum.png'
        ]);
    }

    public function ko(): self
    {
        return $this->state([
            'name' => 'Ko',
            'rune_count' => '3',
            'image' => '/storage/runes/ko.png'
        ]);
    }

    public function fal(): self
    {
        return $this->state([
            'name' => 'Fal',
            'rune_count' => '3',
            'image' => '/storage/runes/fal.png'
        ]);
    }

    public function lem(): self
    {
        return $this->state([
            'name' => 'Lem',
            'rune_count' => '3',
            'image' => '/storage/runes/lem.png'
        ]);
    }

    public function pul(): self
    {
        return $this->state([
            'name' => 'Pul',
            'rune_count' => '3',
            'image' => '/storage/runes/pul.png'
        ]);
    }

    public function um(): self
    {
        return $this->state([
            'name' => 'Um',
            'rune_count' => '2',
            'image' => '/storage/runes/um.png'
        ]);
    }

    public function mal(): self
    {
        return $this->state([
            'name' => 'Mal',
            'rune_count' => '2',
            'image' => '/storage/runes/mal.png'
        ]);
    }

    public function ist(): self
    {
        return $this->state([
            'name' => 'Ist',
            'rune_count' => '2',
            'image' => '/storage/runes/ist.png'
        ]);
    }

    public function gul(): self
    {
        return $this->state([
            'name' => 'Gul',
            'rune_count' => '2',
            'image' => '/storage/runes/gul.png'
        ]);
    }

    public function vex(): self
    {
        return $this->state([
            'name' => 'Vex',
            'rune_count' => '2',
            'image' => '/storage/runes/vex.png'
        ]);
    }

    public function ohm(): self
    {
        return $this->state([
            'name' => 'Ohm',
            'rune_count' => '2',
            'image' => '/storage/runes/ohm.png'
        ]);
    }

    public function lo(): self
    {
        return $this->state([
            'name' => 'Lo',
            'rune_count' => '2',
            'image' => '/storage/runes/lo.png'
        ]);
    }

    public function sur(): self
    {
        return $this->state([
            'name' => 'Sur',
            'rune_count' => '2',
            'image' => '/storage/runes/sur.png'
        ]);
    }

    public function ber(): self
    {
        return $this->state([
            'name' => 'Ber',
            'rune_count' => '2',
            'image' => '/storage/runes/ber.png'
        ]);
    }

    public function jah(): self
    {
        return $this->state([
            'name' => 'Jah',
            'rune_count' => '2',
            'image' => '/storage/runes/jah.png'
        ]);
    }

    public function cham(): self
    {
        return $this->state([
            'name' => 'Cham',
            'rune_count' => '2',
            'image' => '/storage/runes/cham.png'
        ]);
    }

    public function zod(): self
    {
        return $this->state([
            'name' => 'Zod',
            'rune_count' => '2',
            'image' => '/storage/runes/zod.png'
        ]);
    }
}
