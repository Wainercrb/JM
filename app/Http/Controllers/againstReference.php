<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use View;
use \App\Models\againsReference;
use \App\Models\imgAgainstReference;
use \App\Models\measurements;
use \App\Models\reference;

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
            $againsReference = againsReference::join('reference', 'reference.id', '=', 'againstreference.id_reference')->join('users', 'users.id', '=', 'reference.id_user')->select('users.*', 'reference.*', 'againstreference.*')->get();
            return View('private.againstReference.index')->with('againsReference', $againsReference);
        } catch (\Illuminate\Database\QueryException $ex) {
            dd($ex->getMessage());
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($id)
    {
        $reference = reference::join('users', 'users.id', '=', 'reference.id_user')->where('reference.id', '=', $id)->select('reference.*', 'users.*')->get();
        return View('private.againstReference.create')->with('reference', $reference);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        try {
            dd($request);
            $rules=[
                'pulparDiagnosis' => 'required', 
             ];
             $message=[
                'pulparDiagnosis.required' => 'requerido',
             ];
            $validator = Validator::make($request->all(), $rules, $message);
            if ($validator->fails()) {
                return redirect('contra-referencia/nueva')
                            ->withErrors($validator);
            }
    
            $this->erros($request);
            $_againsReference = new againsReference;
            $_againsReference->id_reference = 50;
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
            if ($lastInsertedId > 0) {
                $item = 0;
                foreach ($request->conduit as $conduit) {
                    $measurements = new measurements;
                    $measurements->conduit = $request->conduit[$item];
                    $measurements->measuring = $request->measuring[$item];
                    $measurements->reference = $request->reference[$item];
                    $measurements->lima = $request->lima[$item];
                    $measurements->id_againstReference = $lastInsertedId;
                    $measurements->save();
                    $item++;
                }
                foreach ($request->file('file') as $file) {
                    $_imgAgainstReference = new imgAgainstReference;
                    $_imgAgainstReference->src = Storage::disk('public')->put('/', $file);
                    $_imgAgainstReference->id_againstReference = $lastInsertedId;
                    $_imgAgainstReference->save();
                }
                $reference = reference::find(50);
                $reference->state = 'Recibido';
                $reference->save();
                return redirect('contra-referencia');
            } else {
                return View::make('erros.404');
            }
        } catch (\Illuminate\Database\QueryException $ex) {
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
        $againsReference = againsReference::join('reference', 'reference.id', '=', 'againstreference.id_reference')->join('users', 'users.id', '=', 'reference.id_user')->where('againstreference.id', '=', $id)->get();
        if ($againsReference->count() > 0) {
            $measurements = measurements::where('id_againstReference', '=', $id)->get();
            $imgAgainstReference = imgAgainstReference::where('id_againstReference', '=', $id)->get();
            return View('private.againstReference.show')->with('againsReference', $againsReference)->with('measurements', $measurements)->with('imgAgainstReference', $imgAgainstReference);
        }
        return View::make('erros.404');
    }

/**
 * Show the form for editing the specified resource.
 * @param  int  $id
 * @return Response the view with the data or errors
 */
    public function edit($id)
    {
        try {
            $againsReference = againsReference::join('reference', 'reference.id', '=', 'againstreference.id_reference')->join('users', 'users.id', '=', 'reference.id_user')->select('users.*', 'reference.*', 'againstreference.*')->where('againstreference.id', '=', $id)->get();
            if ($againsReference->count() > 0) {
                $imgAgainstReference = imgAgainstReference::where('id_againstReference', '=', $id)->get();
                $measurements = measurements::where('id_againstReference', '=', $id)->get();
                return View::make('private.againstReference.update')->with('againsReference', $againsReference)->with('measurements', $measurements)->with('imgAgainstReference', $imgAgainstReference);
            }
            return View::make('erros.404');
        } catch (\Illuminate\Database\QueryException $ex) {
            dd($ex->getMessage());
        }
    }

/**
 * Update the specified resource in storage.
 *
 * @param  int  $id
 * @return Response
 */
    public function update(Request $request)
    {
        if ($request->againsReferenceID !== null) {
            $_againsReference = againsReference::find($request->againsReferenceID);
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
            if ($request->measurementsID !== null) {
                foreach ($request->measurementsID as $item) {
                    $measurements = measurements::find($item);
                    $measurements->delete();
                }
            }
            if ($request->conduit !== null) {
                $item = 0;
                foreach ($request->conduit as $conduit) {
                    $measurements = new measurements;
                    $measurements->conduit = $request->conduit[$item];
                    $measurements->measuring = $request->measuring[$item];
                    $measurements->reference = $request->reference[$item];
                    $measurements->lima = $request->lima[$item];
                    $measurements->id_againstReference = $request->againsReferenceID;
                    $measurements->save();
                    $item++;
                }
            }
            if ($request->imgDeleteID !== null) {
                foreach ($request->imgDeleteID as $item) {
                    $valor = explode(',', $item);
                    $_imgAgainstReference = imgAgainstReference::find($valor[0]);
                    $_imgAgainstReference->id = $valor[0];
                    if ($_imgAgainstReference->delete()) {
                        Storage::delete('public/' . $valor[1]);
                    }
                }
            }
            if ($request->file !== null) {
                foreach ($request->file('file') as $file) {
                    $_imgAgainstReference = new imgAgainstReference;
                    $_imgAgainstReference->src = Storage::disk('public')->put('/', $file);
                    $_imgAgainstReference->id_againstReference = $request->againsReferenceID;
                    $_imgAgainstReference->save();
                }
            }
            return $this->index();
        }
        return View::make('erros.404');
    }

    public function delete($id = null)
    {
        if ($id !== null) {
            $againsReference = againsReference::join('reference', 'reference.id', '=', 'againstreference.id_reference')->join('users', 'users.id', '=', 'reference.id_user')->select('users.*', 'reference.*', 'againstreference.*')->where('againstreference.id', '=', $id)->get();
            if ($againsReference->count() > 0) {
                $imgAgainstReference = imgAgainstReference::where('id_againstReference', '=', $id)->get();
                $measurements = Models\measurements::where('id_againstReference', '=', $id)->get();
                return View('private.againstReference.delete')->with('againsReference', $againsReference)->with('measurements', $measurements)->with('imgAgainstReference', $imgAgainstReference);
            }
        }
        return View('erros.404');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request)
    {
        if ($request->id !== null) {
            $_imgAgainstReference = imgAgainstReference::where('id_againstReference', '=', $request->id)->get();
            foreach ($_imgAgainstReference as $item) {
                $_imgAgainstReference = imgAgainstReference::find($item->id);
                $_imgAgainstReference->delete();
                Storage::delete('public/' . $item->src);
            }
            $measurements = measurements::where('id_againstReference', '=', $request->id)->get();
            foreach ($measurements as $item) {
                $measurements = measurements::find($item->id);
                $measurements->delete();
            }
            $_againsReference = againsReference::find($request->id);
            $_againsReference->delete();
            return $this->index();
        }
    }
    public function erros(Request $request)
    {

    }
}
