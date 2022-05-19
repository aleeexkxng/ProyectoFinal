<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tema;
use App\Models\Comentario;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::all();
        return view('all-posts',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-new-post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required','min:2','max:255'],
            'description' => ['required','min:5'],
        ]);
        $allTemas = Tema::with('posts')->get();
        $newPost = new Post();
        $newPost->title = $request->title;
        $newPost->description = $request->description;
        $newPost->user_id=\Auth::user()->id;

        $newPost->save();
        
        return redirect()->route('index', compact('allTemas'))->with('message', 'Post creado existosamente!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $user=User::find($post->user_id);
        $username=$user->name;
        return view('post-page', compact('post','username'));
    }
    public function showComentarios(Post $post)
    {
        $comentarios = Comentario::get();
        return view('post-page', compact('post', 'comentarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Post $post)
    {
        $data = Post::find($request->id);
        return view('edit-post', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => ['required','min:2','max:255'],
            'description' => ['required','min:5'],
        ]);
        $comentarios = Comentario::get();
        $post = Post::find($request->id);
        $post->update($request->except('image_route', '_token', '_method'));
        $post->save();
       
        return redirect()->route('post-page', compact('post','comentarios'))->with('message', 'Post actualizado existosamente!');

    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Post $post)
    {
        $post = Post::find($request->id);
        $allTemas = Tema::with('posts')->get();
        $post->isDeleted = true;
        $post->save();
        return redirect()->route('index', compact('allTemas'))->with('message', 'Post eliminado existosamente!');  
    }
}
