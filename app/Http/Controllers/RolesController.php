<?php

namespace App\Http\Controllers;

use App\Http\Requests\RolesPostRequest;
use App\Models\Roles;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        $roles = Roles::get();
        return response()->json($roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated = $request->validated();

        $storeUser = new Roles;
        $storeUser->nombre = $request->name;
        $storeUser->nombre_en_pantalla = $request->nameScreen;
        $storeUser->save();

        $resp = [
            'resp' => 'Rol creado con exito',
            'code' => '1',
        ];

        return response()->json($resp);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Roles::find($id);
        return response()->json($role);
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
        $user = Roles::where('id', $id)->update([
            'nombre'              =>   $request->name,
            'nombre_en_pantalla'  =>   $request->nameScreen,
            'updated_at'          =>   Carbon::now(),
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
        $role = Roles::findOrFail($id);
        $role->delete();

        return response()->json('Rol eliminado');
    }
}
