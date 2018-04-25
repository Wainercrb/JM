<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Reference;
use \App\Models\Dentalstate;
use \App\Models\Teeths;
use \App\Models\ReferenceTeeths;
use \App\Models\ReferenceDentalState;

class ReferenceController extends Controller
{
    /**
    *ckeck if user is logged
    */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
    * Display a listing of the resource according to users
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
      try {
          if (auth()->user()->hasRole('Admin')) {
                  return View('private.reference.indexAdmin');
              } else if (auth()->user()->hasRole('Guest')) {
                return View('private.reference.indexGuest');
              }
          } catch (\Exception $e) {
            session()->flash('fail', $e->getMessage());
            return self::index();
        }
    }
    /**
    * Show the form for creating a new resource.
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
      try {
          $dentalState = Dentalstate::get();
          $teeths = self::teeths();
          if (!self::validateObject($dentalState)
              || !self::validateObject($teeths)){
              return View('messages.404');
          }
          return View('private.reference.create')->
          with('dentalstate', $dentalState)->
          with('rightUp', $teeths['rightUp'])->
          with('rightDown', $teeths['rightDown'])->
          with('leftUp', $teeths['leftUp'])->
          with('leftDown', $teeths['leftDown'])->
          with('others', $teeths['others']);
          } catch (\Exception $e) {
            session()->flash('fail', $e->getMessage());
            return self::index();
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            if (!self::validateId($id)){
              return View('messages.404');
            }
            $reference = Reference::find($id);
            $dentalstate = Dentalstate::get();
            $teeths = self::teeths();
            $teethsClick = self::teethsClick($id);
            $dentalstateClick = self::dentalstateClick($id);
            if (!self::validateObject($reference)
                || !self::validateObject($dentalstate)
                || !self::validateObject($teeths)){
                return View('messages.404');
            }
            return View('private.reference.show')
                    ->with('dentalstate', $dentalstate)
                    ->with('rightUp', $teeths['rightUp'])
                    ->with('rightDown', $teeths['rightDown'])
                    ->with('leftUp', $teeths['leftUp'])
                    ->with('leftDown', $teeths['leftDown'])
                    ->with('others', $teeths['others'])
                    ->with('teethsClick',$teethsClick)
                    ->with('dentalstateClick',$dentalstateClick)
                    ->with('reference', $reference);
        } catch (\Exception $e) {
          session()->flash('fail', $e->getMessage());
          return self::index();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            if (!self::validateId($id)){
                return View('messages.404');
            }
            $reference = Reference::find($id);
            $dentalstate = Dentalstate::get();
            $teeths = self::teeths();
            $teethsClick = self::teethsClick($id);
            $dentalstateClick = self::dentalstateClick($id);
            if (!self::validateObject($reference)
                || !self::validateObject($dentalstate)
                || !self::validateObject($teeths)){
                return View('messages.404');
            }
            return View('private.reference.update')
                    ->with('dentalstate', $dentalstate)
                    ->with('rightUp', $teeths['rightUp'])
                    ->with('rightDown', $teeths['rightDown'])
                    ->with('leftUp', $teeths['leftUp'])
                    ->with('leftDown', $teeths['leftDown'])
                    ->with('others', $teeths['others'])
                    ->with('teethsClick',$teethsClick)
                    ->with('dentalstateClick',$dentalstateClick)
                    ->with('reference', $reference);
        } catch (\Exception $e) {
          session()->flash('fail', $e->getMessage());
          return self::index();
        }
    }
    /**
     * Show the form for delete a specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirDelete($id)
    {
        try{
            if (!self::validateId($id)){
              return View('messages.404');
            }
            $reference = Reference::find($id);
            $dentalstate = Dentalstate::get();
            $teeths = self::teeths();
            $teethsClick = self::teethsClick($id);
            $dentalstateClick = self::dentalstateClick($id);
            if (!self::validateObject($reference)
                || !self::validateObject($dentalstate)
                || !self::validateObject($teeths)){
                return View('messages.404');
            }
            return View('private.reference.delete')
                    ->with('dentalstate', $dentalstate)
                    ->with('rightUp', $teeths['rightUp'])
                    ->with('rightDown', $teeths['rightDown'])
                    ->with('leftUp', $teeths['leftUp'])
                    ->with('leftDown', $teeths['leftDown'])
                    ->with('others', $teeths['others'])
                    ->with('teethsClick',$teethsClick)
                    ->with('dentalstateClick',$dentalstateClick)
                    ->with('reference', $reference);
        } catch (\Exception $e) {
          session()->flash('fail', $e->getMessage());
          return self::index();
        }
    }
    /**
     * Store a newly created resource in storage.
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
            $reference->id_user = auth()->user()->id;
            $reference->referredAnalgesic = $request->referredAnalgesic;
            $reference->referredAntibioticesic = $request->referredAntibioticesic;
            $reference->observations = $request->observations;
            $reference->state = 'Send';
            $reference->save();
            if (self::validateObject($request->teeths)) {
                foreach ($request->teeths as $item) {
                    $teeth = new Teeths();
                    $teeth->id = $item;
                    $reference->teeths()->attach($teeth);
                }
            }
            if (self::validateObject($request->dentalStatus)) {
                foreach ($request->dentalStatus as $item) {
                    $dentalState = new Dentalstate();
                    $dentalState->id = $item;
                    $reference->dentalStates()->attach($dentalState);
                }
            }
            session()->flash('success', '!Referencia gurdada correctamete¡');
            return self::index();
        } catch (\Exception $e) {
            session()->flash('fail', $e->getMessage());
            return redirect()->back()->withInput($request->all);
        }
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
        try {
            if (!self::validateId($id)){
            return View('messages.404');
            }
            self::deleteTeeths($id);
            self::deleteDentalState($id);
            $reference = Reference::find($id);
            $reference->date = $request->date;
            $reference->patient = $request->patient;
            $reference->identificationCard = $request->identificationCard;
            $reference->birthDate = $request->birthDate;
            $reference->phone = $request->phone;
            $reference->id_user = auth()->user()->id;
            $reference->referredAnalgesic = $request->referredAnalgesic;
            $reference->referredAntibioticesic = $request->referredAntibioticesic;
            $reference->observations = $request->observations;
            $reference->update();
            if (self::validateObject($request->teeths)) {
                foreach ($request->teeths as $item) {
                    $teeth = new Teeths();
                    $teeth->id = $item;
                    $reference->teeths()->attach($teeth);
                }
            }
            if (self::validateObject($request->dentalStatus)) {
                foreach ($request->dentalStatus as $item) {
                    $dentalState = new Dentalstate();
                    $dentalState->id = $item;
                    $reference->dentalStates()->attach($dentalState);
                }
            }
            session()->flash('success', '!Referencia editada correctamete¡');
            return redirect('/referencias');

        } catch (\Exception $e) {
            session()->flash('fail', $e->getMessage());
            return redirect()->back()->withInput($request->all);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            if (!self::validateId($id)){
            return View('messages.404');
            }
            self::deleteTeeths($id);
            self::deleteDentalState($id);
            Reference::where('id', $id)->delete();
            session()->flash('success', '!Referencia eliminada correctamete¡');
            return self::index();
        } catch (\Exception $e) {
            session()->flash('fail', $e->getMessage());
            return self::index();
        }
    }
    function teeths(){
        $rightUp = [];
        $rightDown = [];
        $leftUp = [];
        $leftDown = [];
        $others = [];
        $teethss = Teeths::get();
        foreach ($teethss as $value) {
                if($value->teeth >= 11 && $value->teeth <= 18){
                    $rightUp[] = $value;
                }else if($value->teeth <= 48 && $value->teeth >= 41){
                    $rightDown[] = $value;
                }else if($value->teeth >= 21 && $value->teeth <= 28){
                    $leftUp[] = $value;
                }
                else if($value->teeth >= 31 && $value->teeth <= 38){
                    $leftDown[] = $value;
                }else{
                    $others = $value;
                }
            }
        return ['rightUp'=>$rightUp, 'rightDown'=>$rightDown, 'leftUp'=>$leftUp, 'leftDown'=>$leftDown, 'others'=>$others];
    }
    //order the number in gropus ()
    function teethsClick($id){
        if (!self::validateId($id)){
        return View('messages.404');
        }
        $array = [];
        $teeths = Teeths::join('referenceteeths', 'teeths.id', '=', 'referenceteeths.id_teeth')
                        ->where('referenceteeths.id_reference', $id)
                        ->select('teeths.id')
                        ->get();
        foreach ($teeths as $item) {
            $array[] = $item->id;
        }
        return $array;
    }
    //cke if $id is number
    function dentalstateClick($id){
        if (!self::validateId($id)){
        return View('messages.404');
        }
        $array = [];
        $dentalstateClick = Dentalstate::join('referencedentalstate', 'dentalstate.id',
                                        '=', 'referencedentalstate.id_dentalState')
                                        ->where('referencedentalstate.id_reference', $id)
                                        ->select('dentalstate.id')
                                        ->get();
        foreach ($dentalstateClick as $item) {
            $array[] = $item->id;
        }
        return $array;
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
    //delete row on teeths table
    public function deleteTeeths($id)
    {
     ReferenceTeeths::where('id_reference', $id)->delete();
    }
    //delete row on deltal state table
    public function deleteDentalState($id)
    {
      ReferenceDentalState::where('id_reference', $id)->delete();
    }
}
