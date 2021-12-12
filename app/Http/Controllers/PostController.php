<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller{
    public function index(){
        return view('posts.index');
    }

    public function create(){

    }

    public function store(Request $request){

    }

	public function show($id){
        return "Editing post $id";
    }

	public function edit($id){
        return "Editing post $id";
    }

	public function update(Request $request){

    }

    public function destroy($id){

    }
}