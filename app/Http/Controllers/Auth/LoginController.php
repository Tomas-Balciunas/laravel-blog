<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use PhpParser\Node\Expr\Closure;

class LoginController extends Controller
{
    public function index ()
    {
        return view('auth.login');
    }

    public function authenticate (Request $request): RedirectResponse
    {
        $cred = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (!User::where(['email' => $request->email])->first()) {
            return back()->with('message', 'User with email ' . $request->email . ' not found.');
        }

        if (Auth::attempt($cred)) {
            $request->session()->regenerate();

            return redirect()
                ->intended(route('home'))
                ->with('message', 'You have successfully logged in.');
        }

        return back()->with('message', 'Incorrect password.');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

}
