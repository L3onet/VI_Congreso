<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::get();
        return view('post.index',["posts" => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'title' => 'required|min:5|max:500',
            'slug' => 'required|min:5|max:500',
            'content' => 'required|min:7',
            'description' => 'required|min:7',
            'category_id' => 'required|integer',
            'posted' => 'required',
        ]);

        $data = 'Mensaje';
        //dd($data);
        Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->slug),
            'content' => $request->content,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'image' => $data,
            'posted' => $request->posted
        ]);

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        $categories = Category::get();
        return view('post.show', compact('categories', 'post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        $categories = Category::get();
        return view('post.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
        $data = $request->validate([
            'title' => 'required|min:5|max:500',
            'slug' => 'required|min:5|max:500',
            'content' => 'required|min:7',
            'description' => 'required|min:7',
            'category_id' => 'required|integer',
            'posted' => 'required',
        ]);

        $post->update($data);

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //echo "Mensaje";

        $message = 'Registro eliminado con éxito';

        try {
            $post->delete();
        } catch (\Exception $e) {
            $message = 'Error al eliminar el registro';
        }
        return redirect()->route('post.index')->with('message', $message);

    }
}
