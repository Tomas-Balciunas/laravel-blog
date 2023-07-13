<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Silber\Bouncer\Bouncer;

class RegisterController extends Controller
{
    public function index ()
    {
        return view('auth.register');
    }

    public function registration (Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $user->assign('user');
        $user->allow()->toOwn(Blog::class)->to(['update', 'delete']);
        $user->allow()->to([
            'create-blog'
        ]);

        return redirect('/login')->with('message', 'Registration successful! You may now log in.');
    }
}
