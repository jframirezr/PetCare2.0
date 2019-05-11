<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mascota;
class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotas=Mascota::all();
        return view('view.index', compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('view.RegistroMascota');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mascota= new Mascota();
        $mascota->nombre=$request->input('Nombre');
        $mascota->raza=$request->input('Raza');
        $mascota->peso=$request->input('Peso'); 
        $mascota->edad=$request->input('Edad');
        $mascota->save();

        return view('view.MenuPrincipal');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $mascota = Mascota::find($id);
     $vacuna=Mascota::findOrFail($id);
     return "Datos de la mascota: ".$mascota.PHP_EOL.
            "Datos de las vacunas: ".$vacuna->vacunas;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mascota $mascota)
    {
       $mascota->delete();
       return "eliminado";
    }
}
