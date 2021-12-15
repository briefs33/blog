<?php

namespace App\Http\Controllers;

//use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller{
    public function index(){
        $posts = \App\Models\Post::orderBy('created_at','desc')->get();

//        return $posts;

        return view('posts.index')
        ->with('posts',$posts);
    }

    public function create(){
        $tags = \App\Models\Tag::all();

        return view('posts.create')
        ->with('title','Add new post')
        ->with('tags',$tags);
    }

    public function store(Requests\SavePostRequest $request){
// Chyba Auth v Models - Auth::user()-posts()->create($request->all());
        $post = Auth::user()->posts()->create($request->all());

        $post->tags()->sync($request->get('tags') ?: []);

//        return $request->all();
        return redirect()->route('post.show', $post->id);
    }

	public function show($id){
        $post = \App\Models\Post::findOrFail($id);

        return view('posts.show')
        ->with('post', $post);
    }

	public function edit($id){
//        return "Editing post $id";
        $post = \App\Models\Post::findOrFail($id);

        $this->authorize('edit-post',$post);
        
        $tags = \App\Models\Tag::all();

        $post->tags; //vo formulári predvyznačí checkbox_i

        return view('posts.edit')
        ->with('title', 'Edit post')
        ->with('post', $post)
        ->with('tags', $tags);
    }

	public function update(Requests\SavePostRequest $request, $id){
        $post = \App\Models\Post::findOrFail($id);

        $this->authorize('edit-post',$post);

        $post->update( $request->all() );

        $post->tags()->sync( $request->get('tags') ?: []);

        return redirect()->route('post.show',$post->id);
    }

    public function destroy($id){

    }
}