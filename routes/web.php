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

Route::get('/', function () {
    return view('public.index');
});

Route::get('/login', function () {
     return view('private.againstReference.index');
 });
Route::get('/login', function () {
     return view('auth.login');
 });
Route::get('/login2', function () {
     return view('private.againstReference.show');
 });
Route::get('/new-user', function () {
     return view('private.registerUser');
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

// post-routes
Route::get('/post/nuevo', 'post@create');

// agasint-reference-routes
Route::post('/contra-referencia/guardar', 'againstReference@store');
Route::post('/contra-referencia/editar', 'againstReference@update');
Route::post('/contra-referencia/confirmar-eliminar', 'againstReference@destroy');
Route::get('/contra-referencia/nueva', 'againstReference@create');
Route::get('/contra-referencia/ver/{id}', 'againstReference@show');
Route::get('/contra-referencia/eliminar/{id}', 'againstReference@delete');
Route::get('/contra-referencia/editar/{id}', 'againstReference@edit');
Route::get('contra-referencia', 'againstReference@index');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
