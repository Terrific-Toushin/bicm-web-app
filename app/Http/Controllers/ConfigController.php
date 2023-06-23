<?php

namespace App\Http\Controllers;

class ConfigController extends Controller
{
    public function clearRoute()
    {
        \Artisan::call('route:clear');
        return 'Routes cache cleared';
    }
    public function clearCache()
    {
        \Artisan::call('config:cache');
        return 'Config cache cleared';
    }
}
