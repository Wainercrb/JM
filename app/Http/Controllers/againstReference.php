<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use View;
use App\Http\Controllers\Controller;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class againstReference extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function Index()
    {
        $model = \App\Models\againsReference::orderBy('id', 'DESC')->get();
        return View::make('private.againstReference.index')->with('posts', $model);

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $reference = \App\Models\reference::join('users','users.id', '=', 'reference.id_user')->where('reference.id','=', 1)->get();
    //    dd($reference);
        return View::make('private.againstReference.create')->with('reference', $reference);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $_againsReference = new \App\Models\againsReference;
        $_againsReference->id_reference = $request->id_user;
        $_againsReference->dentalOrgan = $request->dentalOrgan;
        $_againsReference->pulparDiagnosis = $request->pulparDiagnosis;
        $_againsReference->periapicalDiagnosis = $request->periapicalDiagnosis;
        $_againsReference->forecast = $request->forecast;
        $_againsReference->startTreatment = $request->startTreatment;
        $_againsReference->endTreatment = $request->endTreatment;
        $_againsReference->recommendation = $request->recommendation;
        $_againsReference->provisionalMaterial = $request->provisionalMaterial;
        $_againsReference->observations = $request->observations;
        $_againsReference->save();
        $lastInsertedId = $_againsReference->id;
        $item = 0;
        foreach($request->conduit as $conduit){
            $measurements = new \App\Models\measurements;
            $measurements->conduit = $request->conduit[$item];
            $measurements->measuring = $request->measuring[$item];
            $measurements->reference = $request->reference[$item];
            $measurements->lima = $request->lima[$item];
            $measurements->id_againstReference = $lastInsertedId;
            $measurements->save();
            $item++;
        }
        foreach($request->file('file') as $file){
            $_imgAgainstReference = new \App\Models\imgAgainstReference;
            $_imgAgainstReference->src = Storage::disk('public')->putFile('againstReference',new file($file));
            $_imgAgainstReference->id_againstReference = $lastInsertedId;
            if($_imgAgainstReference->save()){
            }else{
                echo('error');
            }
        }
    }
        
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        
        $againsReference = \App\Models\againsReference::join('reference','reference.id', '=', 'againstreference.id_reference')->join('users','users.id', '=', 'reference.id_user')->where('againstreference.id', '=',$id)->get();
       
        $measurements = \App\Models\measurements::where('id_againstReference', '=',$id)->get();
        $_imgAgainstReference = \App\Models\imgAgainstReference::where('id_againstReference', '=',$id)->get();
        return View::make('private.againstReference.show')->with('againsReference', $againsReference)->with('measurements', $measurements)->with('imgAgainstReference', $_imgAgainstReference);
        
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
