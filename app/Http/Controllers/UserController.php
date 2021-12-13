<?php
//use App\User;
//use App\Http\Controllers\Controller;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id){
        $user=\App\User::findOrFail($id);

//        return $user->posts;
        return view('posts.index')
        ->with('title',$user->name)
        ->with('posts',$user->posts);
    }
}
