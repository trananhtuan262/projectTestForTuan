<?php

namespace App\Http\Controllers;
use App\Service\Geolocation\Geolocation;
use App\Service\Satellite\Satellite;
use Illuminate\Http\Request;
use App\Providers\GeolocationServiceProvider;
use App\Service\Map\Map;

class IndexController extends Controller
{
    public function index()
    {
        $test = app('Geolocation')->FunctionName();
        echo $test;
    }
}
