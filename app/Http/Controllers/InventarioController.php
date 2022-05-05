<?php

namespace App\Http\Controllers;

use App\inventario;
use App\Models\inventarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Inventarios = DB::table('inventarios')

        ->select('inventarios.id','inventarios.producto','inventarios.cantidad', 'inventarios.created_at', 'inventarios.updated_at')


        ->get();

        // return view('admin.inicioAdmin', compact('NuevosUser'));

        return $Inventarios;
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
        inventarios::create($request->all());
        // return redirect('/PizzaWorld/UserFav');
        // return back();
        return 'producto creado con exito';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function show(inventario $inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function edit(inventario $inventario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosInventarios = $request->except(['_token','_method']);
        inventarios::where(['id'=>$id])->update($datosInventarios);
        // return back();
        return 'producto editado con exito';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(inventario $inventario)
    {
        //
    }
}
