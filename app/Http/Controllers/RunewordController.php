<?php

namespace App\Http\Controllers;

use App\Models\Rune;
use App\Models\Runeword;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class RunewordController extends Controller
{
    public function index(): View
    {
        $runewords = Cache::remember('runewords', now()->addHour(), function () {
            return Runeword::orderBy('level', 'asc')
                ->with('runes')
                ->get()
                ->map(function ($runeword) {
                    # Structure the attributes to be readable
                    $attr = explode('|', $runeword->attributes);
                    unset($runeword->attributes);
                    $runeword->attributes = $attr;

                    # Make the rune priority visible to Vue
                    $runes = $runeword->runes->map(function ($rune) {
                        $rune->priority = $rune->pivot->priority;

                        return $rune;
                    });

                    unset($runeword->runes);
                    $runeword->runes = $runes;

                    return $runeword;
                });
        });

        return view('runewords.index', ['runewords' => $runewords]);
    }

    public function calculator(): View
    {
        $runewords = Cache::remember('calculator-runewords', now()->addHour(), function () {
            return Runeword::with(['runes' => fn ($query) => $query->select('runes.id')])
                ->get()
                ->map(function ($rWord) {

                    $runes = $rWord->runes->pluck('id')->toArray();
                    $attr = explode('|', $rWord->attributes);

                    unset($rWord->runes);
                    unset($rWord->attributes);

                    $rWord->runes = $runes;
                    $rWord->attributes = $attr;

                    return $rWord;

                })->toArray();
        });

        $runes = Cache::remember('calculator-runes', now()->addHour(), function () {
            return Rune::orderBy('level', 'asc')->get();
        });

        return view('runewords.calculator', ['runes' => $runes, 'runewords' => $runewords]);
    }
}
