<?php

use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('app');
});*/

Route::view(`/app`,`app`);

Route::get('/dashboard', function () {
    return view('app');
});
Route::get('/addPosts', function () {
    return view('app');
});
Route::get('/edit/:id', function () {
    return view('app');
});

Route::resource('/addPost',"postController");