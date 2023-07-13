<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userPanel ()
    {
        $userBlogs = Auth::user()->blog()->latest()->get();
        return view('pages.user_panel', compact('userBlogs'));
    }
}
