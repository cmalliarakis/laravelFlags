<?php

namespace App\Services;

use App\Contracts\CountryDataProvider;
use Illuminate\Support\Facades\Http;

class RestCountriesService implements CountryDataProvider
{
    public function fetchCountries()
    {
        $response = Http::get('https://restcountries.com/v3.1/all');
        return $response->json();
    }
}
