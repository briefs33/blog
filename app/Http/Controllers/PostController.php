<?php

namespace App\Http\Controllers;

//use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller{
    public function index(){
        $posts = \App\Models\Post::all();

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

    public function store(Request $request){

    }

	public function show($id){
        $post = \App\Models\Post::findOrFail($id);

        return view('posts.show')
        ->with('post', $post);
    }

	public function edit($id){
        return "Editing post $id";
    }

	public function update(Request $request){

    }

    public function destroy($id){

    }
}