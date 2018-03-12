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
     return view('private.againstReference.index');
 });
Route::get('/login2', function () {
     return view('private.againstReference.show');
 });
Route::get('/new-user', function () {
     return view('public.posts');
 });
Route::get('/new-user2', function () {
     return view('private.againstReference.create');
 });
// Route::get('/main', function () {
//     return view('users.main');
// });
// Route::get('/new-post', function () {
//     return view('users.new-post');
// });
// Route::get('/search-users', function () {
//     return view('users.search-users');
// });
// Route::get('/posts', function () {
//     return view('home.posts');
// });
// Route::get('/', function () {
//     return view('home.index');
// });
// Route::get('/profile', function () {
//     return view('home.profile');
// });
// Route::get('/contra-referencia', function () {
//     return view('users.againstReference.againstReference');
// });

// // againstReference routes
// Route::post('/againstReference', function (Request $request) {
   
// });
Route::get('/contra-referencia/create', 'againstReference@create');
Route::get('/contra-referencia/ver/{id}', 'againstReference@show');
Route::post('/contra-referencia/guardar', 'againstReference@store');
Route::post('/againstReference/actualizar{id}', 'againstReference@update');
Route::post('/againstReference/eliminar{id}', 'againstReference@delete');
Route::get('contra-referencia', 'againstReference@index');



