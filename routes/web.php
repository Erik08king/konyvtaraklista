<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\konyvekController;


Route::get('/',[konyvekController::class,'konyvek'])->name('fooldal');

Route::get('/felvetel',[konyvekController::class,'felvetel'])->name('felveteloldal');
Route::post('/modositas/{aid}',[konyvekController::class,'modositas']);
Route::post('/modositas/{aid}',[konyvekController::class, 'modositasmentese']);
Route::post('/torles',[konyvekController::class, 'torles']);

Route::get('/lista',[konyvekController::class,'lista'])->name('listaoldal');