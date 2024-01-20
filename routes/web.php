<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BodegaController;
use App\Http\Controllers\VinoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*

Route::get('/', [BodegaController::class, "index"])->name("bodega.index");

Route::get('/bodegas/create', [BodegaController::class, "create"])->name("bodega.create");

Route::post('/bodegas/store', [BodegaController::class, "store"])->name("bodega.store");

Route::get('/bodegas/show/{bodega}', [BodegaController::class, "show"])->name("bodega.show");

Route::get('/bodegas/edit/{bodega}/{edit}', [BodegaController::class, "edit"])->name("bodega.edit");

Route::put('/bodegas/update/{bodega}', [BodegaController::class, "update"])->name("bodega.update");

Route::delete('/bodegas/destroy/{bodega}', [BodegaController::class, "destroy"])->name("bodega.destroy");

*/
Route::get('/', [BodegaController::class, "index"])->name("bodegas.index");

Route::get('/bodegas/{bodega}/vinos', [BodegaController::class, 'show'])->name('bodegas.vinos.show');

Route::resource('/bodegas', BodegaController::class);

Route::resource('/vinos', VinoController::class);

