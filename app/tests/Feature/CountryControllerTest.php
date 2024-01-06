<?php


use Tests\TestCase;

class CountryControllerTest extends TestCase
{
    /** @test */
    public function it_returns_country_data()
    {
        $response = $this->get('/api/countries');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            // Add the expected JSON structure here
        ]);
    }
}
