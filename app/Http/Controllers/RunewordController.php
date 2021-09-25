<?php

namespace App\Http\Controllers;

use App\Models\Rune;
use App\Models\Runeword;

class RunewordController extends Controller
{
    public function index()
    {
        $runewords = Runeword::orderBy('level', 'asc')
            ->get()
            ->map(function ($runeword) {
                $attr = explode('|', $runeword->attributes);
                unset($runeword->attributes);

                $runeword->attributes = $attr;

                return $runeword;
        });

        return view('runewords.index', ['runewords' => $runewords]);
    }

    public function calculator()
    {
        $runewords = Runeword::with(['runes' => function ($query) {
            return $query->select('runes.id');
        }])->get()
            ->map(function($rWord) {

                $runes = $rWord->runes->pluck('id')->toArray();
                $attr = explode('|', $rWord->attributes);

                unset($rWord->runes);
                unset($rWord->attributes);

                $rWord->runes = $runes;
                $rWord->attributes = $attr;

                return $rWord;

            })->toArray();

        $runes = Rune::orderBy('level', 'asc')->get();

        return view('runewords.calculator', ['runes' => $runes, 'runewords' => $runewords]);
    }
}
