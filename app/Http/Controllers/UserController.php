<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use View;

class userController extends Controller
{
    //moddleware
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        return view('private.user.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirDelete($id)
    {
      try {
          if (!self::validateId($id)) {
            return View('messages.404');
          }
          $user = user::join('roles', 'users.role_id', '=' , 'roles.id')->
          select('users.*', 'roles.name as roleName')->find($id);
          $role = Role::pluck('name', 'id');
          if (!self::validateObject($user)) {
            return View('messages.404');
          }
          return view('private.user.delete')->with('user', $user)->with('role', $role);
      } catch (\Exception $e) {
          session()->flash('fail', $e->getMessage());
          return redirect('/usuarios');
      }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      try {
        $role = Role::pluck('name', 'id');
        if (!self::validateObject($role)) {
          return View('messages.404');
        }
        return view('private.user.create')->with('role',$role);
      } catch (\Exception $e) {
        session()->flash('fail', $e->getMessage());
        return redirect('/usuarios');
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
          if (!self::validateId($id)) {
            return View('messages.404');
          }
          $user = user::join('roles', 'users.role_id', '=' , 'roles.id')->
          select('users.*', 'roles.name as roleName')->find($id);
          $role = Role::pluck('name', 'id');
          if (!self::validateObject($user)) {
            return View('messages.404');
          }
          return view('private.user.show')->with('user', $user)->with('role', $role);
      } catch (\Exception $e) {
          session()->flash('fail', $e->getMessage());
          return redirect('/usuarios');
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
          if (!self::validateId($id)) {
            return View('messages.404');
          }
          $user = user::join('roles', 'users.role_id', '=' , 'roles.id')->
          select('users.*', 'roles.name as roleName')->find($id);
          $role = Role::pluck('name', 'id');
          if (!self::validateObject($user)) {
            return View('messages.404');
          }
          return view('private.user.update')->with('user', $user)->with('role', $role);
      } catch (\Exception $e) {
        session()->flash('fail', $e->getMessage());
        return redirect('/usuarios');
      }
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
           $emailAndCode = self::emailAndCodeExist($request->email, $request->code);
           if ($emailAndCode != null) {
               session()->flash('exist', $emailAndCode);
               return redirect()->back()->withInput($request->all);
           }
           $role = Role::where('id', $request->role)->first();
           $user = new User();
           $user->name = $request->name;
           $user->surnames = $request->surnames;
           $user->image = self::saveProfileImage($request->image);
           $user->code = $request->code;
           $user->email = $request->email;
           $user->password = bcrypt($request->password);
           $user->roles()->associate($role);
           if (!$user->save()) {
             session()->flash('fail', '!Error al guardar el usuario¡');
           }else{
             session()->flash('success', '!Guardado correctamete¡');
           }
           return redirect('/usuarios');
         } catch (\Exception $e) {
             session()->flash('fail', $e->getMessage());
             return redirect()->back()->withInput($request->all);
         }
     }

    /**
    * Update the specified resource in storage
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        try {
            if (!self::validateId($id)) {
              return View('messages.404');
            }
            $emailAndCode = self::emailAndCodeExistToEdit($request->email, $request->code, $id);
            if ($emailAndCode != null) {
              session()->flash('exist', $emailAndCode);
              return redirect('/usuarios');
            }
            $role = Role::where('id', $request->role)->first();
            $user = user::find($id);
            $user->name = $request->name;
            $user->code = $request->code;
            $user->email = $request->email;
            $user->surnames = $request->surnames;
            $user->roles()->associate($role);
            // check if request has avatar imaga
            if ($request->hasFile('image')) {
              $user->image = self::saveProfileImageToEdit($request->image, $id);
            }
            // chcke if request has passowd
            if (isset($request->password)) {
                $user->password = bcrypt($request->password);
            }
            if ($user->save()) {
                session()->flash('success', '!Usuario actualizado correctamete¡');
            } else {
                session()->flash('fail', '!No se pudo actualizar el usuario¡');
            }
            if (auth()->user()->hasRole('Guest')) {
                 return redirect('/mi-app');
            }
            return redirect('/usuarios');
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
      try {
          if (!self::validateId($id)) {
            return View('messages.404');
          }
          $user = user::select('image')->find($id);
          if (user::where('id', $id)->delete()) {
              Storage::delete('public/' . $user->image);
              session()->flash('success', '!Usuario eliminado correctamete¡');
            }else{
              session()->flash('fail', '!Error, nose pudo eliminar el usuario¡');
            }
            return redirect('/usuarios');
          } catch (\Exception $e) {
            session()->flash('fail', $e->getMessage());
            return redirect('/usuarios');
          }
    }
    //ckeck if email exist on save action
    public function emailAndCodeExist($requestEmail, $requestCode)
    {
        $email = user::where('email', '=', $requestEmail)->count();
        $code = user::where('code', '=', $requestCode)->count();
        if ($email > 0 || $code > 0) {
            $email != 0 ? $message[] = "Email " . $requestEmail . ", ya esta registrado" : "";
            $code != 0 ? $message[] = "Codigo " . $requestCode . ", ya esta registrado" : "";
            return $message;
        }
        return null;
    }
    //ckeck if email exist on edit action
    public function emailAndCodeExistToEdit($requestEmail, $requestCode, $id)
    {
      $email = user::where('email', '=', $requestEmail)->select('id')->first();
      $code = user::where('code', '=', $requestCode)->select('id')->first();
      if ((isset($email->id) && $email->id != $id) || (isset($code->id) && $code->id != $id)) {
          $email->id != $id ? $message[] = "Email " . $requestEmail . ", ya esta registrado" : "";
          $code->id != $id ? $message[] = "Codigo " . $requestCode . ", ya esta registrado" : "";
          return $message;
      }
      return null;
    }
    //ckeck save avatar profile on edit action
    public function saveProfileImageToEdit($image,$id)
    {
      $img = user::select('image')->find($id);
      if ($img->image == 'default.png') {
       return self::saveProfileImage($image);
      }
      Storage::delete('public/' . $img->image);
       return self::saveProfileImage($image);
    }
    //ckeck if email exist on save actions
    public function saveProfileImage($image)
    {
      if (isset($image)) {
        return Storage::disk('public')->put('/', $image);
      }
      return 'default.png';
    }
    //check if id exist
    public function validateId($id)
    {
      if (!isset($id) || !is_numeric($id)  ) {
          return false;
      }
      return true;
    }
    public function validateObject($object)
    {
      if (!isset($object) || $object == null) {
        return false;
      }
      return true;
    }
}
