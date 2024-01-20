<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\BodegaRequest;



class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $bodegas = Bodega::all();
        return view("bodega.index", compact("bodegas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view("bodega.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BodegaRequest $request): RedirectResponse
    {
      //la validacion se hace mediante un custom request

        // Insertar el artículo en la BBDD tras su validación.
        Bodega::create($request->all());

        return redirect(route('bodegas.index'))->with("success", "Bodega creada correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(Bodega $bodega): View
    {
        return view("bodega.show", [
            "bodega"=> $bodega,
            "edit" => false
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bodega $bodega): View
    {
        return view("bodega.show", [
            "bodega"=> $bodega,
            "edit" => true
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BodegaRequest $request, Bodega $bodega): RedirectResponse
    {

        //la validacion se hace mediante un custom request

        $bodega->update($request->all());

        return redirect(route('bodegas.index'))->with("success", "Bodega actualizada correctamente");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bodega $bodega): RedirectResponse
    {
        $bodega->delete();

        return redirect(route('bodegas.index'))->with("danger", "Bodega borrada correctamente");
    }
}
