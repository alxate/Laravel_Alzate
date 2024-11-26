<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
=======
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10

class RegisteredUserController extends Controller
{
    /**
<<<<<<< HEAD
=======
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
<<<<<<< HEAD
    public function store(Request $request): Response
=======
    public function store(Request $request): RedirectResponse
>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
<<<<<<< HEAD
            'password' => Hash::make($request->string('password')),
=======
            'password' => Hash::make($request->password),
>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10
        ]);

        event(new Registered($user));

        Auth::login($user);

<<<<<<< HEAD
        return response()->noContent();
=======
        return redirect(route('dashboard', absolute: false));
>>>>>>> df2b649759f8f10d745d8689907434d916ad7f10
    }
}
