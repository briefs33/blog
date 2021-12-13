<?php

namespace App\Http\Controllers;

//use App\User;
use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function show($id){
        $tag=\App\Models\Tag::findOrFail($id);

        return view('posts.index')
        ->with('title',$tag->name)
        ->with('posts',$tag->posts);
    }
}
