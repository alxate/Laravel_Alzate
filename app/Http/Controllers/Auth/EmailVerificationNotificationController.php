<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use Illuminate\Http\JsonResponse;
=======
>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
<<<<<<< HEAD
    public function store(Request $request): JsonResponse|RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended('/dashboard');
=======
    public function store(Request $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('dashboard', absolute: false));
>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10
        }

        $request->user()->sendEmailVerificationNotification();

<<<<<<< HEAD
        return response()->json(['status' => 'verification-link-sent']);
=======
        return back()->with('status', 'verification-link-sent');
>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10
    }
}
