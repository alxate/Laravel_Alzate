<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class PasswordResetTest extends TestCase
{
    use RefreshDatabase;

<<<<<<< HEAD
=======
    public function test_reset_password_link_screen_can_be_rendered(): void
    {
        $response = $this->get('/forgot-password');

        $response->assertStatus(200);
    }

>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10
    public function test_reset_password_link_can_be_requested(): void
    {
        Notification::fake();

        $user = User::factory()->create();

        $this->post('/forgot-password', ['email' => $user->email]);

        Notification::assertSentTo($user, ResetPassword::class);
    }

<<<<<<< HEAD
=======
    public function test_reset_password_screen_can_be_rendered(): void
    {
        Notification::fake();

        $user = User::factory()->create();

        $this->post('/forgot-password', ['email' => $user->email]);

        Notification::assertSentTo($user, ResetPassword::class, function ($notification) {
            $response = $this->get('/reset-password/'.$notification->token);

            $response->assertStatus(200);

            return true;
        });
    }

>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10
    public function test_password_can_be_reset_with_valid_token(): void
    {
        Notification::fake();

        $user = User::factory()->create();

        $this->post('/forgot-password', ['email' => $user->email]);

<<<<<<< HEAD
        Notification::assertSentTo($user, ResetPassword::class, function (object $notification) use ($user) {
=======
        Notification::assertSentTo($user, ResetPassword::class, function ($notification) use ($user) {
>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10
            $response = $this->post('/reset-password', [
                'token' => $notification->token,
                'email' => $user->email,
                'password' => 'password',
                'password_confirmation' => 'password',
            ]);

            $response
                ->assertSessionHasNoErrors()
<<<<<<< HEAD
                ->assertStatus(200);
=======
                ->assertRedirect(route('login'));
>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10

            return true;
        });
    }
}
