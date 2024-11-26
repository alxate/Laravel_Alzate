<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

<<<<<<< HEAD
=======
    public function test_login_screen_can_be_rendered(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10
    public function test_users_can_authenticate_using_the_login_screen(): void
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
<<<<<<< HEAD
        $response->assertNoContent();
=======
        $response->assertRedirect(route('dashboard', absolute: false));
>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10
    }

    public function test_users_can_not_authenticate_with_invalid_password(): void
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }

    public function test_users_can_logout(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/logout');

        $this->assertGuest();
<<<<<<< HEAD
        $response->assertNoContent();
=======
        $response->assertRedirect('/');
>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10
    }
}
