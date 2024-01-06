<?php

namespace App\Http\Controllers;

use App\Contracts\CountryDataProvider;

class CountryController extends Controller
{
    protected $countryService;

    public function __construct(CountryDataProvider $countryService)
    {
        $this->countryService = $countryService;
    }

    public function index()
    {
        return $this->countryService->fetchCountries();
    }
}



