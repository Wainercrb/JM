<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Storage;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        
        $rules = [
            'avatar' => 'required',
            'name' => 'required',
            'surnames' => 'required',
            'email' => 'required',
            'password' => 'required'
        ];
        $message = [
            
            'avatar.required' => 'Avatar requido',
            'name.required' => 'Nombre requerido',
            'surnames.required' => 'Apellidos requeridos',
            'email.required' => 'Email requerido',
            'password.required' => 'Contraseña requerida'
        ];
        return  $validator = Validator::make($data, $rules, $message);
           

            
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {   
      
        $src = Storage::disk('public')->put('/', $data['avatar']);
        return User::create([
            'image' => $src,
            'name' => $data['name'],
            'surnames' => $data['surnames'],
            'code' => $data['code'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
