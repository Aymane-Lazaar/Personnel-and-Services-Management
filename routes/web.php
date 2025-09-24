<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\ServiceController;

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
Route::get('/services/{NumService}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/services/{NumService}/edit', [ServiceController::class, 'edit'])->name('services.edit');
Route::put('/services/{NumService}', [ServiceController::class, 'update'])->name('services.update');
Route::delete('/services/{NumService}', [ServiceController::class, 'destroy'])->name('services.destroy');



use App\Http\Controllers\PersonnelController;

// Route::resource('personnels', PersonnelController::class);


Route::get('/personnels', [PersonnelController::class, 'index'])->name('personnels.index');

Route::get('/personnels/create', [PersonnelController::class, 'create'])->name('personnels.create');

Route::post('/personnels', [PersonnelController::class, 'store'])->name('personnels.store');

Route::get('/personnels/{NumPersonnel}/edit', [PersonnelController::class, 'edit'])->name('personnels.edit');

Route::put('/personnels/{NumPersonnel}', [PersonnelController::class, 'update'])->name('personnels.update');

Route::delete('/personnels/{NumPersonnel}', [PersonnelController::class, 'destroy'])->name('personnels.destroy');

