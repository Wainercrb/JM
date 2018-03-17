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
        try {
        $againsReference = \App\Models\againsReference::join('reference','reference.id', '=', 'againstreference.id_reference')->join('users','users.id', '=', 'reference.id_user')->select('users.*', 'reference.*', 'againstreference.*')->get();     
        return View::make('private.againstReference.index')->with('againsReference', $againsReference);
        } catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex->getMessage()); 
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $reference = \App\Models\reference::join('users','users.id', '=', 'reference.id_user')->where('reference.id','=', 1)->get();
        return View::make('private.againstReference.create')->with('reference', $reference);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
public function store(Request $request){
try { 
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
        if($lastInsertedId > 0){
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
            $_imgAgainstReference->src = Storage::disk('public')->put('/', $file);
            $_imgAgainstReference->id_againstReference = $lastInsertedId;
            $_imgAgainstReference->save();
        }
        return redirect('contra-referencia');
    }else{
        return View::make('erros.404');   
    }
    } catch(\Illuminate\Database\QueryException $ex){ 
        dd($ex->getMessage()); 
    }
}
        
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id = null)
    {
        if($id !== null){
            $againsReference = \App\Models\againsReference::join('reference','reference.id', '=', 'againstreference.id_reference')->join('users','users.id', '=', 'reference.id_user')->where('againstreference.id', '=',$id)->get();
            if($againsReference->count() > 0){
            $measurements = \App\Models\measurements::where('id_againstReference', '=',$id)->get();
            $imgAgainstReference = \App\Models\imgAgainstReference::where('id_againstReference', '=',$id)->get();
            return View::make('private.againstReference.show')->with('againsReference', $againsReference)->with('measurements', $measurements)->with('imgAgainstReference', $imgAgainstReference);
            }    
        }
        return View::make('erros.404');    
    }

/**
* Show the form for editing the specified resource.
* @param  int  $id
* @return Response the view with the data or errors
*/
public function edit($id){
try {
    $againsReference = \App\Models\againsReference::join('reference','reference.id', '=', 'againstreference.id_reference')->join('users','users.id', '=', 'reference.id_user')->select('users.*', 'reference.*', 'againstreference.*')->where('againstreference.id','=', $id)->get();  
        if($againsReference->count() > 0){
        $imgAgainstReference = \App\Models\imgAgainstReference::where('id_againstReference', '=',$id)->get();
        $measurements = \App\Models\measurements::where('id_againstReference', '=',$id)->get();
        return View::make('private.againstReference.update')->with('againsReference', $againsReference)->with('measurements', $measurements)->with('imgAgainstReference', $imgAgainstReference);
        }
        return View::make('erros.404');        
    } catch(\Illuminate\Database\QueryException $ex){ 
        dd($ex->getMessage()); 
    }
}

/**
* Update the specified resource in storage.
*
* @param  int  $id
* @return Response
*/
public function update(Request $request){
        if($request->againsReferenceID !== null){
            $_againsReference = \App\Models\againsReference::find($request->againsReferenceID);
            $_againsReference->id = $request->againsReferenceID;
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
            if($request->measurementsID !== null){
                    foreach($request->measurementsID as $item){
                        $measurements = \App\Models\measurements::find($item);
                        $measurements->delete();
                    }
            }
            if($request->conduit !== null){
                $item = 0;
                foreach($request->conduit as $conduit){
                    $measurements = new \App\Models\measurements;
                    $measurements->conduit = $request->conduit[$item];
                    $measurements->measuring = $request->measuring[$item];
                    $measurements->reference = $request->reference[$item];
                    $measurements->lima = $request->lima[$item];
                    $measurements->id_againstReference = $request->againsReferenceID;
                    $measurements->save();
                    $item++;
                }
            } 
            if($request->imgDeleteID !== null){
                foreach($request->imgDeleteID as  $item){
                    $valor = explode(',',$item); 
                    $_imgAgainstReference = \App\Models\imgAgainstReference::find($valor[0]);
                    $_imgAgainstReference->id = $valor[0];
                    if($_imgAgainstReference->delete()){
                        Storage::delete('public/'.$valor[1]);
                    }
                }
            }
            if($request->file !== null){
                foreach($request->file('file') as $file){
                    $_imgAgainstReference = new \App\Models\imgAgainstReference;
                    $_imgAgainstReference->src = Storage::disk('public')->put('/', $file);
                    $_imgAgainstReference->id_againstReference = $request->againsReferenceID;
                    $_imgAgainstReference->save();
                }
            }  
            return redirect('contra-referencia');
        }
        return View::make('erros.404'); 
    }



public function delete($id = null){
    if($id !== null){    
        $againsReference = \App\Models\againsReference::join('reference','reference.id', '=', 'againstreference.id_reference')->join('users','users.id', '=', 'reference.id_user')->select('users.*', 'reference.*', 'againstreference.*')->where('againstreference.id','=', $id)->get();  
        if($againsReference->count() > 0){
            $imgAgainstReference = \App\Models\imgAgainstReference::where('id_againstReference', '=',$id)->get();
            $measurements = \App\Models\measurements::where('id_againstReference', '=',$id)->get();
            return View::make('private.againstReference.delete')->with('againsReference', $againsReference)->with('measurements', $measurements)->with('imgAgainstReference', $imgAgainstReference);
        }
    } 
    return View::make('erros.404'); 
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request)
    {
        if($request->id !== null){
        $_imgAgainstReference =  \App\Models\imgAgainstReference::where('id_againstReference', '=',$request->id)->get();
        foreach($_imgAgainstReference as $item){
            $_imgAgainstReference = \App\Models\imgAgainstReference::find($item->id);
            $_imgAgainstReference->delete();
            Storage::delete('public/'.$item->src);
        }
        $measurements = \App\Models\measurements::where('id_againstReference', '=',$request->id)->get();
        foreach($measurements as $item){
             $measurements = \App\Models\measurements::find($item->id);
             $measurements->delete();
        }
        $_againsReference = \App\Models\againsReference::find($request->id);
        $_againsReference->delete();
        return redirect('contra-referencia');
        }
    }
}
