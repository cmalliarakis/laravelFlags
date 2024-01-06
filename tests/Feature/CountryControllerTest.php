<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class CountryControllerTest extends TestCase
{
    use WithoutMiddleware;

    /** @test */
    public function it_returns_country_data()
    {
        $response = $this->get('/api/countries');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            '*' => [ 
                'name' => [
                    'common',
                    'official',
                ],
            ],
        ]);
    }
}
