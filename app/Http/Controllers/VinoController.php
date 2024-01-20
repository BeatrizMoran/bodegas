<?php

namespace App\Http\Controllers;

use App\Models\Vino;
use Illuminate\Http\Request;

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
    public function create()
    {
        return view("vino.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VinoRequest $request)
    {
        Vino::create($request->all());
        return redirect(route('bodegas.vinos.show'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Vino $vino)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vino $vino)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vino $vino)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vino $vino)
    {
        //
    }
}
