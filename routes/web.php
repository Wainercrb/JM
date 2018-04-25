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

Route::group(['middleware' => 'web'], function () {
    // geraral routes
    Route::get('getPosts', 'PostController@getPosts')->name('post.getPosts');
    Route::post('login', 'Auth\LoginController@login')->name('login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::post('register', 'UserController@store')->name('register');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('noticias', function () {
        return view('public.posts');
    })->name('news');
    Route::get('/', function () {
        return view('public.index');
    })->name('home');
    Route::get('perfil', function () {
        return view('public.profile');
    })->name('home');
    Route::get('401', function () {
        return view('messages.401');
    })->name('401');
    Route::get('mi-app', [
        'uses'       => 'HomeController@index',
        'as'         => 'home.index',
        'middleware' => 'roles',
        'roles'      => ['Admin', 'Guest'],
    ]);
    Route::get('/login', function () {
        if (auth()->user() != null && (auth()->user()->hasRole('Guest') || auth()->user()->hasRole('Admin'))) {

            return redirect('/mi-app');
        } else {
            return view('public.login');
        }
    })->name('login');
    Route::post('login', 'Auth\LoginController@login')->name('login');
    Route::post('logout', [
        'uses'       => 'Auth\LoginController@logout',
        'as'         => 'logout',
        'middleware' => 'roles',
        'roles'      => ['Admin', 'Guest'],
    ]);
    // end general routes

    //user routes
    Route::get('usuarios', [
        'uses'       => 'UserController@index',
        'as'         => 'user.get',
        'middleware' => 'roles',
        'roles'      => ['Admin'],
    ]);
    Route::get('usuario/nuevo', [
        'uses'       => 'UserController@create',
        'as'         => 'user.create',
        'middleware' => 'roles',
        'roles'      => ['Admin'],
    ]);
    Route::get('usuario/editar/{id}', [
        'uses'       => 'UserController@edit',
        'as'         => 'user.edit',
        'middleware' => 'roles',
        'roles'      => ['Admin', 'Guest'],
    ]);
    Route::get('usuario/confirmar/{id}', [
        'uses'       => 'UserController@confirDelete',
        'as'         => 'user.get',
        'middleware' => 'roles',
        'roles'      => ['Admin'],
    ]);
    Route::get('usuario/ver/{id}', [
        'uses'       => 'UserController@show',
        'as'         => 'user.show',
        'middleware' => 'roles',
        'roles'      => ['Admin'],
    ]);
    Route::post('usuario/actualizar/{id}', [
        'uses'       => 'UserController@update',
        'as'         => 'user.update',
        'middleware' => 'roles',
        'roles'      => ['Admin', 'Guest'],
    ]);
    Route::post('usuario/guardar', [
        'uses'       => 'UserController@store',
        'as'         => 'user.store',
        'middleware' => 'roles',
        'roles'      => ['Admin'],
    ]);
    Route::post('usuario/eliminar/{id}', [
        'uses'       => 'UserController@destroy',
        'as'         => 'user.destroy',
        'middleware' => 'roles',
        'roles'      => ['Admin'],
    ]);
    //end user routes

    //routs againstReference
    Route::get('contrarreferencias', [
        'uses'       => 'AgainstReferenceController@index',
        'as'         => 'aginstReference.get',
        'middleware' => 'roles',
        'roles'      => ['Admin'],
    ]);
    Route::get('contrarreferencia/nueva/{id}', [
        'uses'       => 'AgainstReferenceController@create',
        'as'         => 'againstReference.create',
        'middleware' => 'roles',
        'roles'      => ['Admin'],
    ]);
    Route::get('contrarreferencia/confirmar/{id}', [
        'uses'       => 'AgainstReferenceController@confirDelete',
        'as'         => 'againstReference.confir',
        'middleware' => 'roles',
        'roles'      => ['Admin'],
    ]);
    Route::get('contrarreferencia/editar/{id}', [
        'uses'       => 'AgainstReferenceController@edit',
        'as'         => 'againstReference.edit',
        'middleware' => 'roles',
        'roles'      => ['Admin'],
    ]);
    Route::get('contrarreferencia/ver/{id}', [
        'uses'       => 'AgainstReferenceController@show',
        'as'         => 'againsReference.show',
        'middleware' => 'roles',
        'roles'      => ['Admin', 'Guest'],
    ]);
    Route::get('contrarreferencia/finalizar/{id}', [
        'uses'       => 'AgainstReferenceController@finalize',
        'as'         => 'AgainstReference.finalize',
        'middleware' => 'roles',
        'roles'      => ['Admin', 'Guest'],
    ]);
    Route::post('contrarreferencia/guardar/{id}', [
        'uses'       => 'AgainstReferenceController@store',
        'as'         => 'againstReference.store',
        'middleware' => 'roles',
        'roles'      => ['Admin'],
    ]);
    Route::post('contrarreferencia/actualizar/{id}', [
        'uses'       => 'AgainstReferenceController@update',
        'as'         => 'againstReference.update',
        'middleware' => 'roles',
        'roles'      => ['Admin'],
    ]);
    Route::post('contrarreferencia/eliminar/{id}', [
        'uses'       => 'AgainstReferenceController@destroy',
        'as'         => 'AgainstReference.destroy',
        'middleware' => 'roles',
        'roles'      => ['Admin'],
    ]);
    Route::post('contrarreferencia/terminado/{id}', [
        'uses'       => 'AgainstReferenceController@finished',
        'as'         => 'AgainstReference.finished',
        'middleware' => 'roles',
        'roles'      => ['Admin', 'Guest'],
    ]);
    //end against-reference routes

    //reference routes
    Route::get('referencias', [
        'uses'       => 'ReferenceController@index',
        'as'         => 'reference.get',
        'middleware' => 'roles',
        'roles'      => ['Admin', 'Guest'],
    ]);
    Route::get('referencia/nueva', [
        'uses'       => 'ReferenceController@create',
        'as'         => 'reference.create',
        'middleware' => 'roles',
        'roles'      => ['Admin', 'Guest'],
    ]);
    Route::get('referencia/editar/{id}', [
        'uses'       => 'ReferenceController@edit',
        'as'         => 'reference.edit',
        'middleware' => 'roles',
        'roles'      => ['Admin', 'Guest'],
    ]);
    Route::get('referencia/confirmar/{id}', [
        'uses'       => 'ReferenceController@confirDelete',
        'as'         => 'reference.confir',
        'middleware' => 'roles',
        'roles'      => ['Admin', 'Guest'],
    ]);
    Route::get('referencia/ver/{id}', [
        'uses'       => 'ReferenceController@show',
        'as'         => 'reference.show',
        'middleware' => 'roles',
        'roles'      => ['Admin', 'Guest'],
    ]);
    Route::post('referencia/guardar', [
        'uses'       => 'ReferenceController@store',
        'as'         => 'reference.store',
        'middleware' => 'roles',
        'roles'      => ['Admin', 'Guest'],
    ]);
    Route::post('referencia/actualizar/{id}', [
        'uses'       => 'referenceController@update',
        'as'         => 'reference.update',
        'middleware' => 'roles',
        'roles'      => ['Admin', 'Guest'],
    ]);
    Route::post('referencia/eliminar/{id}', [
        'uses'       => 'ReferenceController@destroy',
        'as'         => 'reference.destroy',
        'middleware' => 'roles',
        'roles'      => ['Admin', 'Guest'],
    ]);
    //end reference routes

    //post routes
    Route::get('posts', [
        'uses'       => 'PostController@index',
        'as'         => 'post.get',
        'middleware' => 'roles',
        'roles'      => ['Admin'],
    ]);
    Route::get('post/nuevo', [
        'uses'       => 'PostController@create',
        'as'         => 'post.create',
        'middleware' => 'roles',
        'roles'      => ['Admin'],
    ]);
    Route::get('post/editar/{id}', [
        'uses'       => 'PostController@edit',
        'as'         => 'post.edit',
        'middleware' => 'roles',
        'roles'      => ['Admin'],
    ]);
    Route::get('post/confirmar/{id}', [
        'uses'       => 'PostController@confirDelete',
        'as'         => 'post.get',
        'middleware' => 'roles',
        'roles'      => ['Admin'],
    ]);
    Route::get('post/ver/{id}', [
        'uses'       => 'PostController@show',
        'as'         => 'post.show',
        'middleware' => 'roles',
        'roles'      => ['Admin'],
    ]);
    Route::post('post/guardar', [
        'uses'       => 'PostController@store',
        'as'         => 'post.store',
        'middleware' => 'roles',
        'roles'      => ['Admin'],
    ]);
    Route::post('post/actualizar/{id}', [
        'uses'       => 'PostController@update',
        'as'         => 'post.update',
        'middleware' => 'roles',
        'roles'      => ['Admin'],
    ]);
    Route::post('post/eliminar/{id}', [
        'uses'       => 'PostController@destroy',
        'as'         => 'post.destroy',
        'middleware' => 'roles',
        'roles'      => ['Admin'],
    ]);

    //end post routes
});

Route::get('/userGetData', function () {
    return datatables()->eloquent(App\User::query())->make(true);
});
Route::get('/referenceGetData', function () {
    if (auth()->user()->hasRole('Admin')) {
        return datatables()->eloquent(App\Models\reference::query())->make(true);
    } else if (auth()->user()->hasRole('Guest')) {
        return datatables()->eloquent(App\Models\reference::query()->where('id_user', auth()->user()->id))->make(true);
    }
});

Route::get('getMediaForId', 'PostController@getMediaForId')->name('post.getMediaForId');
Route::get('/postGetData', function () {
    return datatables()->eloquent(App\Models\post::query())->make(true);
});
