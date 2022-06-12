<?php

namespace App\Http\Controllers;

use App\Models\Rune;
use App\Models\RuneRecipe;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

class RuneController extends Controller
{
    public function index(): View
    {
        $runes = Cache::remember('runes', now()->addHour(), function () {

            return Rune::all()->map(function ($rune) {
                $attr = explode('|', $rune->attributes);
                unset($rune->attributes);

                $rune->attributes = $attr;

                return $rune;
            });
        });

        return view('runes.index', ['runes' => $runes]);
    }

    public function recipes(): View
    {
        $fields = ['id', 'rune_recipe_id', 'image'];

        $runeRecipes = Cache::remember('rune-recipes', now()->addHour(), function () use ($fields) {
            return RuneRecipe::with(['runes' => fn ($q) => $q->select($fields)])
                ->with(['gem' => fn ($q) => $q->select($fields)])
                ->get();
        });

        return view('runes.recipes', ['runeRecipes' => $runeRecipes]);
    }
}
