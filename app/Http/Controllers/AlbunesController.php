<?php

namespace App\Http\Controllers;

use App\Models\Albunes;
use App\Models\Genero;
use Illuminate\Http\Request;

class AlbunesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $album = Albunes::all();
        return view('albunes.index', compact('album'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genero = Genero::all();
        return view('albunes.create', compact('genero'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'nombre_album' => 'required',
            'año_lanzamiento' => 'required|digits:4',
            'discografia' => 'required|string',
            'genero_id' => 'required|exists:generos,id',
         ]);
         Albunes::create;
         return redirect()->route('albunes.index')->with ('success', 'Album creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Albunes $albunes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Albunes $albunes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Albunes $albunes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Albunes $albunes)
    {
        //
    }
}
