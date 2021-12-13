<?php

namespace App\Http\Controllers;

//use App\User;
use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function show($id){
        $user=\App\Models\User::findOrFail($id);

//        return $user->posts;
        return view('posts.index')
        ->with('title',$user->name)
        ->with('posts',$user->posts);
    }
}
