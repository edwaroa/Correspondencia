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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/usuario', [App\Http\Controllers\UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [App\Http\Controllers\UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/{user}', [App\Http\Controllers\UsuarioController::class, 'show'])->name('usuarios.show');
Route::get('/usuarios/{user}/edit', [App\Http\Controllers\UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{user}', [App\Http\Controllers\UsuarioController::class, 'update'])->name('usuarios.update');
Route::get('/usuarios/{user}/eliminar', [App\Http\Controllers\UsuarioController::class, 'eliminar'])->name('usuarios.delete');

Route::get('/dependencias', [App\Http\Controllers\DependenciaController::class, 'index'])->name('dependencias.index');