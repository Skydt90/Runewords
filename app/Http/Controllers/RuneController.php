<?php

namespace App\Http\Controllers;

use App\Models\Rune;

class RuneController extends Controller
{
    public function index()
    {
        $runes = Rune::all()->map(function ($rune) {
            $attr = explode('|', $rune->attributes);
            unset($rune->attributes);

            $rune->attributes = $attr;

            return $rune;
        });

        return view('runes.index', ['runes' => $runes]);
    }
}
