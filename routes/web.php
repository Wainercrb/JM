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

// Route::get('/login', function () {
//      return view('private.againstReference.index');
//  });
// Route::get('/login', function () {
//      return view('auth.login');
//  });
// Route::get('/login2', function () {
//      return view('private.againstReference.show');
//  });
Route::get('/new-user', function () {
     return view('public.post');
 });
Route::get('/new-user2', function () {
     return view('private.againstReference.create');
 });
// Route::get('/main', function () {
//     return view('users.main');
// });



//stard login routes
Route::get('login', function () {
    return view('public.login');
});
Route::get('usuario/nuevo', function () {
    return view('private.user.create');
});
Route::get('referencia', function () {
    return view('private.user.create');
});


//end login routes



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


// General Routes
Route::get('usuarios', 'UserController@index');
Route::get('usuarios/nuevo', 'UserController@create');



// End General Routes




// post-routes
Route::get('/post/nuevo', 'post@create');


// agasint-reference-routes
Route::post('/contra-referencia/guardar', 'againstReference@store');
Route::post('/contra-referencia/editar', 'againstReference@update');
Route::post('/contra-referencia/confirmar-eliminar', 'againstReference@destroy');
Route::get('/contra-referencia/nueva/{id}', 'againstReference@create')->name('/contra-referencia/nueva');
Route::get('/contra-referencia/ver/{id}', 'againstReference@show')->name('/contra-referencia/ver');
Route::get('/contra-referencia/eliminar/{id}', 'againstReference@delete');
Route::get('/contra-referencia/editar/{id}', 'againstReference@edit');
Route::get('contra-referencia', 'againstReference@index');
// agasint-reference-routes
Route::post('/referencia/guardar', 'ReferenceController@store')->name('/referencia/guardar');
Route::post('/referencia/editar', 'ReferenceController@update');
Route::post('/referencia/confirmar-eliminar', 'ReferenceController@destroy');
Route::get('/referencia/nueva', 'ReferenceController@create');
Route::get('/referencia/ver/{id}', 'ReferenceController@show');
Route::get('/referencia/eliminar/{id}', 'ReferenceController@delete');
Route::get('/referencia/editar/{id}', 'ReferenceController@edit');
Route::get('/referencia', 'ReferenceController@index');



// post routes

Route::get('posts', 'postController@posts');
Route::get('imagenes', 'postController@images');
Route::get('/post/nuevo', 'postController@create');
Route::post('/post/guardar', 'postController@store');

// end post routes

Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('register', 'Auth\RegisterController@register')->name('register');
Route::post('usuario/guardar', 'UserController@store')->name('usuario/guardar');



// home controller
Route::get('mi-app', 'HomeController@index')->name('mi-app');
// end home controller


