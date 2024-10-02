<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\rouge\Controllers\FluxController;


// ROUTE BACKOFFICE ACTUALITE 
// INDEX
Route::get('actu/admin', [FluxController::class, 'index'])->name('actu.admin.index');
// CREATE
Route::get('actu/admin/create',[FluxController::class, 'create'])->name('actu.admin.create');
Route::post('actu/admin/create',[FluxController::class, 'store'])->name('actu.admin.store');
//UPDATE
Route::get('actu/admin/edit/{id}',[FluxController::class, 'edit'])->name('actu.admin.edit');
Route::put('actu/admin/{id}', [FluxController::class, 'update'])->name('actu.admin.update');
//SOFT-DELETE
Route::delete('actu/admin/{id}' ,[FluxController::class, 'destroy'])->name('actu.admin.destroy');


//ROUTE FRONTOFFICE ACTUALITE
//INDEX
Route::get('actu',[FluxController::class, 'afficherFlux'])->name('actu.index');
Route::get('actu/{nom_flux}',[FluxController::class, 'afficherFlux'])->name('actu.index');