<?php

namespace App\Http\Controllers;

use App\administrador;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Inicio Del Admin';
        // return view('Admin.profile');
    }

    public function profile($id)
    {

        $NuevosUser = DB::table('users')

        ->select('users.id','users.name','users.user', 'users.contra', 'users.id_rol')
        ->where('users.id', '=', $id)
        ->where('users.id_rol', '=', '1')

        ->get();

        // return view('admin.inicioAdmin', compact('NuevosUser'));

        return $NuevosUser;

    }

    public function miembros()
    {
        $NuevosUser = DB::table('users')

        ->select('users.id','users.name','users.user', 'users.contra', 'users.id_rol')
        ->where('users.id_rol', '!=', '1')


        ->get();

        // return view('admin.inicioAdmin', compact('NuevosUser'));

        return $NuevosUser;

    }

    public function vehiculos()
    {
        $vehiculo = DB::table('vehiculos')
        ->join('mantenimiento', 'mantenimiento.id', '=', 'vehiculos.mantenimiento_id')
        ->join('users', 'users.id', '=', 'vehiculos.user_id')
        ->select('vehiculos.id','vehiculos.marca','vehiculos.caracteristicas', 'users.name','mantenimiento.tipo_de_mantenimiento', 'vehiculos.created_at', 'vehiculos.updated_at')


        ->get();
        return $vehiculo;

    }

    public function inventario()
    {
        return 'vista de inventarios';

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
        user::create($request->all());
        // return redirect('/PizzaWorld/UserFav');
        // return back();
        return 'usuario creado con exito';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function show(administrador $administrador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function edit(administrador $administrador)
    {
     //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosUsers = $request->except(['_token','_method']);
        user::where(['id'=>$id])->update($datosUsers);
        // return back();
        return 'usuario editado con exito';
    }
    public function updateProfile(Request $request, $id)
    {
        return 'route para editar el perfil del admin de id: '.$id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function destroy(administrador $administrador)
    {
        //
    }
}
