<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
     */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/new-user';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login()
    {
        $rules = [
            'email' => 'required',
            'password' => 'required',
        ];
        $message = [
            'email.required' => 'Debes ingresasr un email valido',
            'password.required' => 'Debes ingresar una contraseña valida',
        ];
        $request = $this->validate(request(), $rules, $message);
        if ((Auth::attempt($request))) {
            return redirect('/mi-app');
        }
        return back()->withErrors(['email' => 'Usuario o contraseña incorrectos', 'password' => 'Usuario o contraseña incorrectos'])->withInput(request(['email']));
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
