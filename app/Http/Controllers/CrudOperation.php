<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class CrudOperation extends Controller
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
        return view('admin.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $rules = $request->validate([
        'title' => 'required',
        'bg-card' => 'file|image',
        'hero-img' => 'file|image',
        'img' => 'file|image',
        'category_id' => 'required',
        'desc1' => 'required',
        'desc2' => 'required',
        'desc3' => 'required',
        'desc4' => 'required',
      ]);
      if ($request->file('bg-card')) {
        $rules['bg-card'] = $request->file('bg-card')->store('background');
      }
      if ($request->file('hero-img')) {
        $rules['hero-img'] = $request->file('hero-img')->store('hero-image');
      }
      if ($request->file('img')) {
        $rules['img'] = $request->file('img')->store('image');
      }

      Post::create($rules);
      return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.edit', [
            'categories' => Category::all(),
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post['bg-card']) {
            Storage::delete($post['bg-card']);
        }
        if ($post['hero-img']) {
            Storage::delete($post['hero-img']);
        }
        if ($post['img']) {
            Storage::delete($post->img);
        }
        $post->delete();
        return redirect('/dashboard');
    }
}
