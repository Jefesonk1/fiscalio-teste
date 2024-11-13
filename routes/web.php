<?php

use App\Http\Controllers\NotasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notas', [NotasController::Class, 'index'])->name('notas.index');
Route::get('/notas/criar', [NotasController::Class, 'create'])->name('notas.create');
Route::post('/notas/store', [NotasController::Class,'store'])->name('notas.store');

