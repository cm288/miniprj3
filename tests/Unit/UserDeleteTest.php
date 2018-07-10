<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserDeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserDelete()
    {
        $user = new User();
        $user->name = 'Jane Doe';
        $user->email = 'testing@gmail.com';
        $user->password = 'password123';
        $user->save();


        $this->assertTrue($user->delete());
    }
}
