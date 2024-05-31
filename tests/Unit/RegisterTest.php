<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic unit test example.
     */

     use RefreshDatabase, WithFaker;

    public function test_example(): void
    {
        $this->assertTrue(true);
    }

     /** @test */
     public function it_can_register_a_user()
     {
         $userData = [
             'name' => 'Andres',
             'email' => 'adavid0902@gmail.com',
             'password' => 'password123', // Assuming you want to use a fixed password for the test
         ];
 
         $response = $this->post('/register', $userData);
 
         $this->assertDatabaseHas('users', [
            'name' => 'Andres'
        ]);
     }
}
