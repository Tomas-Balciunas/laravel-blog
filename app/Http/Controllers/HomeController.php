<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index (Blog $blog)
    {
        $blogs = $blog->latest()->get();

        return view('pages.home', compact('blogs'));
    }
}
