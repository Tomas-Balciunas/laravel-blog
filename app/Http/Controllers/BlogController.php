<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create_blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        if (!auth()->user()->can('create-blog')) {
            return back()->with('message', 'You do not have permissions for this action.');
        }

        $request->validate([
            'headline' => ['required'],
            'body' => ['required']
        ]);

        Blog::create([
            'headline' => $request->headline,
            'body' => $request->body,
            'user_id' => auth()->id()
        ]);

        return redirect('/my_panel')->with('message', 'Your blog has been posted!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if (!auth()->user()->can('delete', $blog)){
            return back()->with('message', 'You do not have permissions for this action.');
        }

        $blog->delete();

        return back()->with('message', 'Blog has been deleted');
    }
}
