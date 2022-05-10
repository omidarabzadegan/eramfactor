<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class artisanController extends Controller
{
    function migrate()
    {
        Artisan::call('migrate', [
            '--force' => true,
        ]);

        dd('migration is done');
    }

    function clearCache()
    {
        Artisan::command('cache:clear');

        dd("Cache is cleared");
    }

    function npmInstall()
    {
        Artisan::command('npm install');

        dd("npm installed");
    }

    function npmRunDev()
    {
        Artisan::command('npm run dev');

        dd("npm run dev successful");
    }

    function migratereset()
    {
        Artisan::call('magrate:reset', [
            '--force' => true,
        ]);

        dd('migration reset is done');
    }
}
