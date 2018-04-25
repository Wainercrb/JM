<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use View;
use \App\Models\AgainsReference;
use \App\Models\ImgAgainstReference;
use \App\Models\Measurements;
use \App\Models\Reference;

class AgainstReferenceController extends Controller
{
    /**
     *@ckeck if user is logged
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($id)
    {
        try {
            if (!self::validateId($id)) {
                return View('messages.404');
            }
            $reference = Reference::join('users', 'users.id', '=', 'reference.id_user')->
                where('reference.id', '=', $id)->
                select('reference.id', 'reference.patient',
                'reference.identificationCard', 'users.name', 'users.surnames')->
                where('reference.id', $id)->
                first();
            if (!self::validateObject($reference)) {
                return View('messages.404');
            }
            $reference->name = $reference->name . ' ' . $reference->surnames;
            return View('private.againstReference.create')->with('reference', $reference);
        } catch (\Exception $e) {
            session()->flash('fail', $ex->getMessage());
            return redirect('/referencias');
        }
    }
    public function finalize($id)
    {
        try {
            if (!self::validateId($id)) {
                return View('messages.404');
            }
            $againsReference = AgainsReference::join('reference', 'reference.id', '=', 'againstreference.id_reference')->
                join('users', 'users.id', '=', 'reference.id_user')->
                select('users.*', 'reference.*', 'againstreference.*')->
                where('reference.id', '=', $id)->
                first();
            if (!self::validateObject($againsReference)) {
                return View('messages.404');
            }
            if (!self::validateObject($againsReference)) {
                return View('messages.404');
            }
            $againsReference->name = $againsReference->name . ' ' . $againsReference->surnames;
            $imgAgainstReference   = ImgAgainstReference::where('id_againstReference', $againsReference->id)->get();
            $measurements          = Measurements::where('id_againstReference', $againsReference->id)->get();
            return View('private.againstReference.finalize')->
                with('againsReference', $againsReference)->
                with('measurements', $measurements)->
                with('imgAgainstReference', $imgAgainstReference);
        } catch (\Exception $e) {
            session()->flash('fail', $e->getMessage());
            return redirect('/mi-app');
        }
    }

    /**
     * Show the form for confirm delete.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            if (!self::validateId($id)) {
                return View('messages.404');
            }
            $againsReference = AgainsReference::join('reference', 'reference.id', '=', 'againstreference.id_reference')->
                join('users', 'users.id', '=', 'reference.id_user')->
                select('users.*', 'reference.*', 'againstreference.*')->
                where('reference.id', '=', $id)->
                first();
            if (!self::validateObject($againsReference)) {
                return View('messages.404');
            }
            if (!self::validateObject($againsReference)) {
                return View('messages.404');
            }
            $againsReference->name = $againsReference->name . ' ' . $againsReference->surnames;
            $imgAgainstReference   = ImgAgainstReference::where('id_againstReference', $againsReference->id)->get();
            $measurements          = Measurements::where('id_againstReference', $againsReference->id)->get();
            return View('private.againstReference.show')->
                with('againsReference', $againsReference)->
                with('measurements', $measurements)->
                with('imgAgainstReference', $imgAgainstReference);
        } catch (\Exception $e) {
            session()->flash('fail', $e->getMessage());
            return redirect('/referencias');
        }
    }
    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return Response the view with the data or errors
     */
    public function edit($id)
    {
        try {
            if (!self::validateId($id)) {
                return View('messages.404');
            }
            $againsReference = AgainsReference::join('reference', 'reference.id', '=', 'againstreference.id_reference')->
                join('users', 'users.id', '=', 'reference.id_user')->
                select('users.*', 'reference.*', 'againstreference.*')->
                where('reference.id', '=', $id)->
                first();
            if (!self::validateObject($againsReference)) {
                return View('messages.404');
            }
            if (!self::validateObject($againsReference)) {
                return View('messages.404');
            }
            $againsReference->name = $againsReference->name . ' ' . $againsReference->surnames;
            $imgAgainstReference   = ImgAgainstReference::where('id_againstReference', $againsReference->id)->get();
            $measurements          = Measurements::where('id_againstReference', $againsReference->id)->get();
            return View('private.againstReference.update')->
                with('againsReference', $againsReference)->
                with('measurements', $measurements)->
                with('imgAgainstReference', $imgAgainstReference);
        } catch (\Exception $e) {
            session()->flash('fail', $e->getMessage());
            return redirect('/referencias');
        }
    }

    /**$request->imgDeleteID
     * Show the form for confirm delete.
     * @return \Illuminate\Http\Response
     */
    public function confirDelete($id)
    {
        try {
            if (!self::validateId($id)) {
                return View('messages.404');
            }
            $againsReference = AgainsReference::join('reference', 'reference.id', '=', 'againstreference.id_reference')
                ->join('users', 'users.id', '=', 'reference.id_user')
                ->select('users.*', 'reference.*', 'againstreference.*')
                ->where('reference.id', $id)
                ->first();
            if (!isset($againsReference) || $againsReference->id <= 0) {
                return View('messages.404');
            }
            if (!self::validateObject($againsReference)) {
                return View('messages.404');
            }
            $imgAgainstReference   = ImgAgainstReference::where('id_againstReference', $againsReference->id)->get();
            $measurements          = Measurements::where('id_againstReference', $againsReference->id)->get();
            $againsReference->name = $againsReference->name . ' ' . $againsReference->surnames;
            return View('private.againstReference.delete')->
                with('againsReference', $againsReference)->
                with('measurements', $measurements)->
                with('imgAgainstReference', $imgAgainstReference);
        } catch (\Exception $e) {
            session()->flash('fail', $e->getMessage());
            return redirect('/referencias');
        }
    }
    /**
     * Store a newly created resource in storage.
     * @return Response
     */
    public function store(Request $request, $id)
    {
        try {
            if (!self::validateId($id)) {
                return View('messages.404');
            }
            $againsReference                      = new AgainsReference();
            $againsReference->id_reference        = $id;
            $againsReference->dentalOrgan         = $request->dentalOrgan;
            $againsReference->pulparDiagnosis     = $request->pulparDiagnosis;
            $againsReference->periapicalDiagnosis = $request->periapicalDiagnosis;
            $againsReference->forecast            = $request->forecast;
            $againsReference->startTreatment      = $request->startTreatment;
            $againsReference->endTreatment        = $request->endTreatment;
            $againsReference->recommendation      = $request->recommendation;
            $againsReference->provisionalMaterial = $request->provisionalMaterial;
            $againsReference->observations        = $request->observations;
            if (!$againsReference->save()) {
                session()->flash('fail', "Error al guardar la contrarreferencia");
                return redirect()->back()->withInput($request->all);
            }
            if ((isset($request->conduit)) && (count($request->conduit) > 0)) {
                $item = 0;
                foreach ($request->conduit as $conduit) {
                    $measurements            = new Measurements();
                    $measurements->conduit   = $request->conduit[$item];
                    $measurements->measuring = $request->measuring[$item];
                    $measurements->reference = $request->reference[$item];
                    $measurements->lima      = $request->lima[$item];
                    $measurements->AgainstReference()->associate($againsReference);
                    $measurements->save();
                    $item++;
                }
            }
            if ($request->hasFile('file')) {
                foreach ($request->file('file') as $file) {
                    $imgAgainstReference      = new ImgAgainstReference();
                    $imgAgainstReference->src = Storage::disk('public')->put('/', $file);
                    $imgAgainstReference->AgainstReference()->associate($againsReference);
                    $imgAgainstReference->save();
                }
            }
            $reference        = Reference::find($id);
            $reference->state = 'Forwarded';
            $reference->save();
            session()->flash('success', '!Contrarreferencia agregada correctamete¡');
            return redirect('/referencias');
        } catch (\Exception $e) {
            session()->flash('fail', $e->getMessage());
            return redirect('/referencias');
        }
    }
    public function finished($id)
    {
        try {
            $reference        = Reference::find($id);
            $reference->state = 'finished';
            $reference->save();
            session()->flash('success', '!Estado guardado correctamente¡');
            return redirect('/referencias');
        } catch (\Exception $e) {
            dd($e);
            session()->flash('fail', $e->getMessage());
            return redirect('/mi-app');
        }
    }
    /**
     * Update the specified resource in storage.
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        try {
            if (!self::validateId($id)) {
                return View('messages.404');
            }
            $againsReference                      = AgainsReference::find($id);
            $againsReference->dentalOrgan         = $request->dentalOrgan;
            $againsReference->pulparDiagnosis     = $request->pulparDiagnosis;
            $againsReference->periapicalDiagnosis = $request->periapicalDiagnosis;
            $againsReference->forecast            = $request->forecast;
            $againsReference->startTreatment      = $request->startTreatment;
            $againsReference->endTreatment        = $request->endTreatment;
            $againsReference->recommendation      = $request->recommendation;
            $againsReference->provisionalMaterial = $request->provisionalMaterial;
            $againsReference->observations        = $request->observations;
            if (!$againsReference->update()) {
                session()->flash('fail', "Error al editar la contrarreferencia");
                return redirect()->back()->withInput($request->all);
            }
            if ((isset($request->conduit)) && (count($request->conduit) > 0)) {
                $item = 0;
                foreach ($request->conduit as $conduit) {
                    $measurements            = new Measurements();
                    $measurements->conduit   = $request->conduit[$item];
                    $measurements->measuring = $request->measuring[$item];
                    $measurements->reference = $request->reference[$item];
                    $measurements->lima      = $request->lima[$item];
                    $measurements->AgainstReference()->associate($againsReference);
                    $measurements->save();
                    $item++;
                }
            }
            if ($request->hasFile('file')) {
                foreach ($request->file('file') as $file) {
                    $imgAgainstReference      = new ImgAgainstReference();
                    $imgAgainstReference->src = Storage::disk('public')->put('/', $file);
                    $imgAgainstReference->AgainstReference()->associate($againsReference);
                    $imgAgainstReference->save();
                }
            }
            if ((isset($request->imgDeleteID)) && (count($request->imgDeleteID) > 0)) {
                self::destroyImages($request->imgDeleteID);
            }
            if ((isset($request->measurementsID)) && (count($request->measurementsID) > 0)) {
                self::destroyMeasurements($request->measurementsID);
            }
            session()->flash('success', '!Contrarreferencia editada correctamete¡');
            return redirect('/referencias');
        } catch (\Exception $e) {
            session()->flash('fail', $e->getMessage());
            return redirect()->back()->withInput($request->all);
        }
    }
    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            if (!self::validateId($id)) {
                return View('messages.404');
            }
            $idReference = AgainsReference::select('id_reference')->find($id);
            $images      = ImgAgainstReference::where('id_againstReference', $id)->select('src')->get();
            if (!self::validateId($idReference->id_reference)) {
                return View('messages.404');
            }
            if ((isset($images)) && (count($images) > 0)) {
                foreach ($images as $item) {
                    ImgAgainstReference::where('src', $item->src)->delete();
                    Storage::delete('public/' . $item->src);
                }
            }
            Measurements::where('id_againstReference', $id)->delete();
            AgainsReference::where('id', $id)->delete();
            $reference        = Reference::find($idReference->id_reference);
            $reference->state = 'Send';
            if (!$reference->save()) {
                session()->flash('fail', "Error al eliminar la Contrareferencia");
                return redirect()->back();
            }
            session()->flash('success', '!Contrareferencia eliminada correctamete¡');
            return redirect('/referencias');
        } catch (\Exception $e) {
            session()->flash('fail', $e->getMessage());
            return redirect('/referencias');
        }
    }
    //validate if object exist
    public function validateObject($object)
    {
        if (!isset($object) || $object == null) {
            return false;
        }
        return true;
    }
    //ckeck if id exist
    public function validateId($id)
    {
        if (!isset($id) || !is_numeric($id) || $id <= 0) {
            return false;
        }
        return true;
    }
    //dlete image from database an storage
    public function destroyImages($images)
    {
        foreach ($images as $item) {
            ImgAgainstReference::where('src', $item)->delete();
            Storage::delete('public/' . $item);
        }
    }
    //delete measurements from database
    public function destroyMeasurements($measurements)
    {
        foreach ($measurements as $item) {
            Measurements::where('id', $item)->delete();
        }
    }
}
