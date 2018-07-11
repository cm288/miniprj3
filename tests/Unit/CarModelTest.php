<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarModelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarModel()
    {
        $car = Car::find($id = '1');
        $model = $car -> model;

        //dd($model);

        $this->assertInternalType('string', $model);
    }
}
