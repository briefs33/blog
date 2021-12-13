<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TagController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//index
Route::get('/', [PostController::class, 'index']);
//Route::get('/', 'PostController@index');
/*/
Route::get('blog',function(){
	return 'this is a blog';
});
/**/

//Route::get('posts', [PostController::class, 'index']);


Route::get('tag/{id}', [TagController::class, 'show']);
Route::get('user/{id}', [UserController::class, 'show']);

Route::resource('post','PostController');

//login
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 

//registration
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 

//logout
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
