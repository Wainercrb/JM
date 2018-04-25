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


            if (auth()->user()->hasRole('Admin')) {
                $reference = Reference::where('reference.state', 'Send')->get();
                return View('private.main')->with('reference', $reference);
            } else if (auth()->user()->hasRole('Guest')) {
              $reference = Reference::where('reference.state', 'Forwarded')
                                      ->where('reference.id_user', auth()->user()->id)->get();
              return View('private.main')->with('reference', $reference);
            }
              return View('erros.401');
        } catch (\Illuminate\Database\QueryException $ex) {
            dd($ex->getMessage());
        }
    }
}
