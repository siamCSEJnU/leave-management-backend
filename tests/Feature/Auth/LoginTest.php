<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_login_with_correct_credentials()
    {
        User::factory()->create([
            'email' => 'manager@company.com',
            'password' => bcrypt('123456'),
        ]);

        $response = $this->postJson('/api/auth/login', [
            'email' => 'manager@company.com',
            'password' => '123456',
        ]);

        $response->assertStatus(200)
                 ->assertJsonStructure(['access_token', 'token_type', 'expires_in']);
    }

    public function test_login_fails_with_wrong_password()
    {
        User::factory()->create([
            'email' => 'test@company.com',
            'password' => bcrypt('correct'),
        ]);

        $response = $this->postJson('/api/auth/login', [
            'email' => 'test@company.com',
            'password' => 'wrong',
        ]);

        $response->assertStatus(401);
    }
}