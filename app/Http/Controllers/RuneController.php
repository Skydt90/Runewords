<?php

namespace App\Http\Controllers;

use App\Models\Rune;
use App\Models\RuneRecipe;
use Illuminate\View\View;

class RuneController extends Controller
{
    public function index(): View
    {
        $runes = Rune::all()->map(function ($rune) {
            $attr = explode('|', $rune->attributes);
            unset($rune->attributes);

            $rune->attributes = $attr;

            return $rune;
        });

        return view('runes.index', ['runes' => $runes]);
    }

    public function recipes(): View
    {
        $fields = ['id', 'rune_recipe_id', 'image'];

        $runeRecipes = RuneRecipe::with(['runes' => fn ($q) => $q->select($fields)])
            ->with(['gem' => fn ($q) => $q->select($fields)])
            ->get();

        return view('runes.recipes', ['runeRecipes' => $runeRecipes]);
    }
}
