<?php

namespace App\Http\Controllers;

use \App\Models\reference;
use \App\Models\againsReference;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userIndex(){
        return view('private.user.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            if (auth()->user()->role === "admin") {
                $Reference = Reference::join('users', 'users.id', '=', 'reference.id_user')->select('users.*', 'reference.*')->where('reference.state', 'like', 'Enviado')->get();
                return View('private.main')->with('Reference', $Reference);
            } else if (auth()->user()->role === "invited") {
                $againsReference = againsReference::join('reference', 'reference.id', '=', 'againstreference.id_reference')->where('reference.state', 'like', 'Recibido')->where('reference.id_user', '=', auth()->user()->id)->select('reference.*', 'againstreference.*')->get();
                return View('private.main')->with('againsReference', $againsReference);
            }
        } catch (\Illuminate\Database\QueryException $ex) {
            dd($ex->getMessage());
        }
    }
}
