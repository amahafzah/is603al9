<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = DB::table('cars')
           ->select('id', 'Make', 'Model', 'Year')
           ->where ('Make', $Make)
           ->value();
       $this=
    }
}
