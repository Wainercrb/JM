<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\reference;
use \App\Models\Dentalstate;
use \App\Models\teeths;
use \App\Models\ReferenceTeeths;
use \App\Models\ReferenceDentalState;

class ReferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $Reference = Reference::join('users', 'users.id', '=', 'reference.id_user')->select('users.*', 'reference.*')->get();
            return View('private.reference.index')->with('Reference', $Reference);
        } catch (\Illuminate\Database\QueryException $ex) {
            dd($ex->getMessage());
        }   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dentalstate = Dentalstate::get();
        $teeths = teeths::get();    
        return View('private.reference.create')->with('dentalstate', $dentalstate)->with('teeths', $teeths);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
        $reference = new Reference;
        $reference->date = $request->date;
        $reference->patient = $request->patient;
        $reference->identificationCard = $request->identificationCard;
        $reference->birthDate = $request->birthDate;
        $reference->phone = $request->phone;
        $reference->id_user = $request->referrer;
        $reference->referredAnalgesic = $request->analgesic;
        $reference->referredAntibioticesic = $request->antibiotic;
        $reference->observations = $request->observations;
        $reference->state = 'Enviado';
        $reference->save();
        $lastInsertedId = $reference->id;
        if ($request->teeth !== null) {
            foreach ($request->teeth as $teeth) {
                $ReferenceTeeths = new ReferenceTeeths;
                $ReferenceTeeths->id_reference = $lastInsertedId;
                $ReferenceTeeths->id_teeth = $teeth;
                $ReferenceTeeths->save();
            }
        }
        if ($request->dentalStatus !== null) {
            foreach ($request->dentalStatus as $dentalStatus) {
                $ReferenceDentalState = new ReferenceDentalState;
                $ReferenceDentalState->id_reference = $lastInsertedId;
                $ReferenceDentalState->id_dentalState = $dentalStatus;
                $ReferenceDentalState->save();
            }
        }
         if ($request->teeth !== null) {}

        
         } catch (\Illuminate\Database\QueryException $ex) {
            return response()->json(['error' => $ex->getMessage()]);
        }
         return response()->json(['success' => 'Agregado correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
