<?php
/**/
Route::get('/',function(){
	return view('welcome');
});
/** /
Route::get('/', function()
{
    return 'Hello World';
});

Route::get('blog',function(){
	return 'this is a blog';
});
/**/