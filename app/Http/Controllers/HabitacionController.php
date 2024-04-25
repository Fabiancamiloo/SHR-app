<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;

class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habitaciones = Habitacion::all();
        return view('habitaciones.index', ['habitaciones' => $habitaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('habitaciones.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $habitacion = new Habitacion();
        $habitacion->hotel_id = $request->hotel_id;
        $habitacion->numero = $request->numero;
        $habitacion->tipo = $request->tipo;
        $habitacion->precio_por_noche = $request->precio_por_noche;
        $habitacion->save();
        
        return redirect()->route('habitaciones.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $habitacion = Habitacion::find($id);
        return view('habitaciones.edit', ['habitacion' => $habitacion]);
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
        $habitacion = Habitacion::find($id);

        $habitacion->hotel_id = $request->hotel_id;
        $habitacion->numero = $request->numero;
        $habitacion->tipo = $request->tipo;
        $habitacion->precio_por_noche = $request->precio_por_noche;
        $habitacion->save();

        return redirect()->route('habitaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $habitacion = Habitacion::find($id);
        $habitacion->delete();

        return redirect()->route('habitaciones.index');
    }
}

