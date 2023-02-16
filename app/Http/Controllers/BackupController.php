<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class BackupController extends Controller
{
    public function backup(): RedirectResponse
    {
        try {
            $destination = 'C:\Users\Chris\Desktop\d2-backup';
            $sourcePath = 'C:\Users\Chris\Saved Games\Diablo II Resurrected';
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

    public function moveBackupToSource(): RedirectResponse
    {
        try {
            $destination = 'C:\Users\Christian\Saved Games\Diablo II Resurrected';
            $sourcePath = 'C:\Users\Christian\Desktop\d2-backup';
            $sourceDir = opendir($sourcePath);

            if (!is_dir($sourcePath)) {
                throw new Exception($sourcePath . ' is not a valid directory!');
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

        return redirect()->back()->with('success', 'Source overridden with backup files');
    }
}
