<?php

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

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/new-user', function () {
    return view('users.registerUser');
});
Route::get('/main', function () {
    return view('users.main');
});
Route::get('/new-post', function () {
    return view('users.newPost');
});


