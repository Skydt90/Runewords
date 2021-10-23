<?php

namespace App\Http\Controllers;

use App\Models\Rune;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

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

    public function backup(): RedirectResponse
    {
        try {
            $destination = 'C:\Users\Christian\Desktop\d2-backup';
            $sourcePath = 'C:\Users\Christian\Saved Games\Diablo II Resurrected';
            $sourceDir = opendir($sourcePath);

            if (!is_dir($destination)) {
                mkdir($destination);
            }

            while ($file = readdir($sourceDir) ) {

                if ($file == '.' || $file == '..' ) continue;

                copy("$sourcePath/$file", "$destination/$file");
            }

            closedir($sourceDir);
        }
        catch (Exception $e) {
            Log::error($e);
            return redirect()->back()->withErrors(['error' => 'Backup failed!']);
        }

        return redirect()->back()->with('success', 'Backup complete!');
    }
}
