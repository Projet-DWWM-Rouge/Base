<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\rouge\Controllers\FluxController;

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


// ROUTE ACCUEIL
Route::get('/', function () {
    //return view('welcome');
    return view('rouge.backOffice.tableauDeBord');
    //return view('backOffice/vueActualite');
})->name('dashboard');

//ROUTE ACCUEIL BACKOFFICE
Route::get('/admin', function () {
    return view('rouge.backOffice.tableauDeBord');
})->name('admin');





//->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/webrouge.php';
