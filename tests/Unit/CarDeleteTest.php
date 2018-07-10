<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarDeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarDelete()
    {
        $car = new Car();
        $car->make = 'Ford';
        $car->model = 'Mustang';
        $car->year = '1963';
        $car->save();

        $this->assertTrue($car->delete());
    }
}
