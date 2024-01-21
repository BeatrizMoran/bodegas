<?php

namespace App\Http\Controllers;

use App\Models\Vino;
use App\Models\Bodega;

use Illuminate\Http\Request;
use App\Http\Requests\VinoRequest;


class VinoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bodegas = Bodega::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Bodega $bodega)
    {
        return view("vino.create", [
            "bodega" => $bodega
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VinoRequest $request)
    {
        Vino::create($request->all());
        return redirect(route('bodegas.vinos.show', $request->bodega_id))->with("success", "Vino creado correctamente");;
    }

    /**
     * Display the specified resource.
     */
    public function show(Vino $vino)
    {
        return view("vino.show", [
            "vino" => $vino,
            "edit" => false
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vino $vino)
    {
        return view('vino.show', [
            "vino" => $vino,
            "edit" => true
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VinoRequest $request, Vino $vino)
    {
        $vino->update($request->all());
        return redirect(route('vinos.show', $vino))->with("success", "Vino actualizado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vino $vino)
    {
        $vino->delete();
        return redirect(route('bodegas.vinos.show', $vino->bodega_id))->with("danger", "Vino borrado correctamente");
    }
}
