<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Analytics;
use Spatie\Analytics\Period;

class GoogleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    //Test that analytics display page loads
    public function testPageload()
    {
        $response = $this->get('/analytics');
        $response->assertStatus(200);
    }

    //Test ability to call browser data from GA API
    public function testBrowserData()
    {
        $response = json_decode(Analytics::fetchTopBrowsers(Period::days(7)));

        self::assertTrue(is_array($response));

    }

    //Test ability to call visitors and page views from GA API
    public function testVisitorData()
    {
        $response = json_decode(Analytics::fetchVisitorsAndPageViews(Period::days(7)));

        self::assertTrue(is_array($response));

    }

}
