<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller{
    public function index(){
        return view('auth.login');
    }  
      

    public function customLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)){
            return redirect()->intended('/')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }



    public function registration(){
        return view('auth.registration');
    }
      

    public function customRegistration(Request $request){  
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => [
                'required',
                'string',
                Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols()],
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("/")->withSuccess('You have signed-in');
    }


    public function create(array $data){
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    

    public function master(){
        if(Auth::check()){
            return view('/');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    

    public function signOut(){
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
