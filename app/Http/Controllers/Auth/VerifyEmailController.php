<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
<<<<<<< HEAD
            return redirect()->intended(
                config('app.frontend_url').'/dashboard?verified=1'
            );
=======
            return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

<<<<<<< HEAD
        return redirect()->intended(
            config('app.frontend_url').'/dashboard?verified=1'
        );
=======
        return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10
    }
}
