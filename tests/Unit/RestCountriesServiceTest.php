<?php

use App\Services\RestCountriesService;
use Tests\TestCase;

class RestCountriesServiceTest extends TestCase
{
    /** @test */
    public function it_fetches_countries()
    {
        $service = new RestCountriesService();
        $response = $service->fetchCountries();

        $this->assertIsArray($response);
    }
}