<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class CountryController extends Controller
{
   public function index()
   {
    return Cache::remember('countries', 60, function () {
        $response = Http::get('https://restcountries.com/v3.1/all');
        return $response->json();
    });
	}
}



