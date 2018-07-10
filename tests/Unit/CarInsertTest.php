<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarInsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarInsert()
    {
        $car = new Car();
        $car->make = 'Honda';
        $car->model = 'Civic';
        $car->year = '2008';


        $this->assertTrue($car->save());
    }
}
