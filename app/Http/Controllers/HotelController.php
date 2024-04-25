<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoteles = Hotel::all();
        return view('hoteles.index', ['hoteles' => $hoteles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hoteles.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hotel = new Hotel();
        $hotel->nombre = $request->nombre;
        $hotel->ubicacion = $request->ubicacion;
        $hotel->numero_telefono = $request->numero_telefono;
        $hotel->email_contacto = $request->email_contacto;
        $hotel->save();
        
        return redirect()->route('hoteles.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotel = Hotel::find($id);
        return view('hoteles.edit', ['hotel' => $hotel]);
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
        $hotel = Hotel::find($id);

        $hotel->nombre = $request->nombre;
        $hotel->ubicacion = $request->ubicacion;
        $hotel->numero_telefono = $request->numero_telefono;
        $hotel->email_contacto = $request->email_contacto;
        $hotel->save();

        return redirect()->route('hoteles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();

        return redirect()->route('hoteles.index');
    }
}

