<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersStoreRequest;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('rolesUSers')->get();
        return view('layoute.app')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(UsersStoreRequest $request)
    {
        $validated = $request->validated();

        $storeUser = new User;
        $storeUser->nombre = $request->names;
        $storeUser->cedula = $request->cedula;
        $storeUser->email = $request->email;
        $storeUser->password = bcrypt($request->password);
        $storeUser->roles_id = $request->roles;
        $storeUser->save();

        $resp = [
            'resp' => 'Usuario creado con exito',
            'code' => '2',
        ];

        return response()->json($resp);
    }


    public function showUsers() {
        $users = User::with('rolesUSers')->get();
        return response()->json($users);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with('rolesUSers')->find($id);
        return response()->json($user);
    }

   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersStoreRequest $request, $id)
    {

        $validate = $request->validated();

        $user = User::where('id', $id)->update([
            'nombre'     =>   $request->names,
            'cedula'     =>   $request->cedula,
            'email'      =>   $request->email,
            'password'   =>   $request->password,
            'roles_id'   =>   $request->roles,
        ]);

        $resp = [
            'resp' => 'El usuario fue actualizado',
            'cod' => '1',
        ];

        return response()->json($resp);
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json('Usuario eliinado');
    }
}
