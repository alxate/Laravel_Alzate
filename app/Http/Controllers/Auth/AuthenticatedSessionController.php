<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
=======
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10

class AuthenticatedSessionController extends Controller
{
    /**
<<<<<<< HEAD
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): Response
=======
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10
    {
        $request->authenticate();

        $request->session()->regenerate();

<<<<<<< HEAD
        return response()->noContent();
=======
        return redirect()->intended(route('dashboard', absolute: false));
>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10
    }

    /**
     * Destroy an authenticated session.
     */
<<<<<<< HEAD
    public function destroy(Request $request): Response
=======
    public function destroy(Request $request): RedirectResponse
>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

<<<<<<< HEAD
        return response()->noContent();
=======
        return redirect('/');
>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10
    }
}
