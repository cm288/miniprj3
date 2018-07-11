<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarMake()
    {
        $car = Car::find($id = '1');
        $make = $car -> make;
        // dd($make);

        $constraints = ['Ford', 'Honda', 'Toyota'];

        $this->assertContains($make, $constraints );
    }
}
