<?php

use App\Http\Controllers\ProfesorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\PDFController;

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


Route::get('/',[LoginController::class, 'index'])->name("login.index");
Route::get('/estudiante',[EstudianteController::class, 'index'])->name("estudiante.index");
Route::get('/estudiante/{rut}',[EstudianteController::class, 'show'])->name("estudiante.show");
Route::get('/estudiantes',[EstudianteController::class, 'lista'])->name("estudiante.lista");
Route::get('/administrador',[AdministradorController::class, 'index'])->name("administrador.index");
Route::get('/administrador/{estudiante}',[AdministradorController::class, 'show'])->name("administradorEstudiante.show");

Route::post('/estudiante',[EstudianteController::class,'store'])->name('estudiante.store');
Route::post('/estudiante/pdf/{estudiante}',[EstudianteController::class,'pdf'])->name('estudiante.pdf');
Route::post('/profesor',[ProfesorController::class,'store'])->name('profesor.store');


Route::get('/profesores',[ProfesorController::class, 'index'])->name('profesor.lista');
Route::get('/profesores/{profesor}',[ProfesorController::class, 'propuestas'])->name('profesor.propuestas');




Route::put('/administrador/{id}',[AdministradorController::class, 'update'])->name("administrador.update");
