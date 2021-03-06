<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Perfil
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::put('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/usuario', [App\Http\Controllers\UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [App\Http\Controllers\UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/{user}', [App\Http\Controllers\UsuarioController::class, 'show'])->name('usuarios.show');
Route::get('/usuarios/{user}/edit', [App\Http\Controllers\UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{user}', [App\Http\Controllers\UsuarioController::class, 'update'])->name('usuarios.update');
Route::post('/usuarios/{user}', [App\Http\Controllers\UsuarioController::class, 'estado'])->name('usuarios.estado');

Route::get('/dependencias', [App\Http\Controllers\DependenciaController::class, 'index'])->name('dependencias.index');
Route::get('/dependencias/create', [App\Http\Controllers\DependenciaController::class, 'create'])->name('dependencias.create');
Route::post('/dependencias', [App\Http\Controllers\DependenciaController::class, 'store'])->name('dependencias.store');
Route::get('/dependencias/{dependencia}', [App\Http\Controllers\DependenciaController::class, 'show'])->name('dependencias.show');
Route::get('/dependencias/{dependencia}/edit', [App\Http\Controllers\DependenciaController::class, 'edit'])->name('dependencias.edit');
Route::put('/dependencias/{dependencia}', [App\Http\Controllers\DependenciaController::class, 'update'])->name('dependencias.update');
Route::post('/dependencias/{dependencia}', [App\Http\Controllers\DependenciaController::class, 'estado'])->name('dependencias.estado');

Route::get('/planillas', [App\Http\Controllers\PlanillaController::class, 'index'])->name('planillas.index');
Route::get('/planillas/create', [App\Http\Controllers\PlanillaController::class, 'create'])->name('planillas.create');
Route::post('/planillas', [App\Http\Controllers\PlanillaController::class, 'store'])->name('planillas.store');
Route::get('/planillas/{planilla}', [App\Http\Controllers\PlanillaController::class, 'show'])->name('planillas.show');
Route::get('/planillas/{planilla}/edit', [App\Http\Controllers\PlanillaController::class, 'edit'])->name('planillas.edit');
Route::put('/planillas/{planillas}', [App\Http\Controllers\PlanillaController::class, 'update'])->name('planillas.update');
Route::post('/planillas/{planillas}', [App\Http\Controllers\PlanillaController::class, 'estado'])->name('planillas.estado');